<?php

namespace App\Http\Controllers;

use App\patients;
use Illuminate\Http\Request;
use App\Http\Resources\patientsResource;

class patientsController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }

    public function createPatients(){
        $patients                    = new patients;
        $patients->first_name        = request()->first_name;
        $patients->last_name         = request()->last_name;
        $patients->gender            = request()->gender;
        $patients->age               = request()->age;
        $patients->phone_number      = request()->phone_number;
        $patients->address           = request()->address;
        $patients->join_date         = request()->join_date;
        $patients->created_by        = $this->authenticated_instance->getAuthenticatedUser();
        $patients->save();
        return view('admin_forms.patient_reg',compact('patients'));   
    }

    protected function validatePatient()
    {
        if(empty(request()->first_name)){
                return redirect()->back()->withErrors("Please enter your first name ");
            }elseif(empty(request()->last_name)){
                return redirect()->back()->withErrors("Please enter your last name");
            }elseif(empty(request()->gender)){
                return redirect()->back()->withErrors("Please enter your gender");
            }elseif(empty(request()->age)){
                return redirect()->back()->withErrors("Please enter your age");
            }elseif(empty(request()->address)){
                return redirect()->back()->withErrors("Please enter your address");
            }elseif(empty(request()->join_date)){
                return redirect()->back()->withErrors("Please enter your join date");
            }elseif(empty(request()->phone_number)){
                return redirect()->back()->withErrors("Please enter your phone number");
            }else{    
                return $this->createPatients();
        }
    }
    public function getPatient(){
        $patients= patientsResource::collection(patients::paginate(10));
        return view('admin_forms.get_patient',compact('patients'));
    }
    public function changePatient($id){
        return patients::find($id)->update(array(
            'first_name'     => request()->first_name,
            'last_name'      => request()->last_name,
            'gender'         => request()->gender,
            'age'            => request()->age,
            'phone_number'   => request()->phone_number,
            'address'        => request()->address,
            'join_date'      => request()->join_date,
        ));
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    public function deletePatients($id){
        patients::find($id)->delete();
        return redirect()->back();
    }
}

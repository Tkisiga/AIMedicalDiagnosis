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
        $patients->created_by        = $this->authenticated_instance->getAuthenticatedUser();
        $patients->save();
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
            }elseif(empty(request()->phone_number)){
                return redirect()->back()->withErrors("Please enter your phone number");
            }else{    
                return $this->createPatients();
        }
    }
    public function getPatient(){
        $patients= patientsResource::collection(patients::all());
        //return view('admin_pages.template',compact('patients'));
    }
    public function changePatient($id){
        return patients::find($id)->update(array(
            'first_name'     => request()->first_name,
            'last_name'      => request()->last_name,
            'gender'         => request()->gender,
            'age'            => request()->age,
            'phone_number'   => request()->phone_number,
        ));
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    public function deletePatients($id){
        patients::find($id)->delete();
        return redirect()->back();
    }
}

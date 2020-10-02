<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicalPractitioners;
use App\Http\Resources\medicalPractitionersResource;

class medicalPractitionersController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }

    public function createMedicalPractitioners(){
        $medicalPractitioners                    = new medicalPractitioners;
        $medicalPractitioners->name              = request()->name;
        $medicalPractitioners->password          = request()->password;
        $medicalPractitioners->email             = request()->email;
        $medicalPractitioners->phone_No          = request()->phone_No;
        $medicalPractitioners->created_by        = $this->authenticated_instance->getAuthenticatedUser();
        $medicalPractitioners->save();
    }
    protected function validateMedicalPractitioners(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors("Please enter your name");
        }elseif(empty(request()->password)){
            return redirect()->back()->withErrors("Please enter your password");
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors("Please enter your email");
        }elseif(empty(request()->phone_No)){
            return redirect()->back()->withErrors("Please enter your contact");
        }else{    
            return $this->createMedicalPractitioners();
        }
    }
    public function getMedicalPractitioners(){
        $medicalPractitioners= medicalPractitionersResource::collection(medicalPractitioners::all());
       // return view('admin_pages.template',compact('medicalPractitioners'));
    }
    public function changeMedicalPractitioners($id){
        return medicalPractitioners::find($id)->update(array(
            'name'          => request()->name,
            'password'      => request()->password,
            'email'         => request()->email,
            'phone_No'      => request()->phone_No,
        ));
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    public function deleteMedicalPractitioners($id){
        medicalPractitioners::find($id)->delete();
        return redirect()->back();
    }
}

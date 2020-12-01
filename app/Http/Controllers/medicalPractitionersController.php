<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicalPractitioners;
use App\Http\Resources\medicalPractitionersResource;

class medicalPractitionersController extends Controller
{
    public function createMedicalPractitioners(){
        return medicalPractitioners::create($this->validateMedicalPractitioners());
    }
    protected function validateMedicalPractitioners(){
        return request()->validate([
            'name'=>'required',
            'password'=>'required',
            'email'=>'required',
            'roleID'=>'required',
            'updated_by'=>'required',
            'phone_No'=>'required',
        ]);
    }
    public function getMedicalPractitioners(){
        return medicalPractitionersResource::collection(medicalPractitioners::all());
    }
    public function changeMedicalPractitioners($id){
        return medicalPractitioners::where('id',$id)->update(array('roleID'=>'ND01'));
    }
    public function deleteMedicalPractitioners($id){
        return medicalPractitioners::where('id',$id)->delete();
    }
}

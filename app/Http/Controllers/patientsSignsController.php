<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientsSigns;
use App\Http\Resources\patientsSignsResource;

class patientsSignsController extends Controller
{
    public function createPatientsSigns(){
        return patientsSigns::create($this->validatePatientsSigns());
    }
    protected function validatePatientsSigns(){
        return request()->validate([
            'patient_id'=>'required',
            'sign_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getPatientsSigns(){
            return patientsSignsResource::collection(patientsSigns::all());
        }
        public function changePatientsSigns($id){
            return patientsSigns::where('id',$id)->update(array('patient_id'=>'P01'));
        }
        public function removePatientsSigns($id){
            return patientsSigns::where('id',$id)->delete();
        }
}

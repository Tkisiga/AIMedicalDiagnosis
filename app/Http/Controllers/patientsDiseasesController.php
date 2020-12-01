<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientsDiseases;
use App\Http\Resources\patientsDiseasesResource;

class patientsDiseasesController extends Controller
{
    public function createPatientsDiseases(){
        return patientsDiseases::create($this->validatePatientsDiseases());
    }
    protected function validatePatientsDiseases(){
        return request()->validate([
            'patient_id'=>'required',
            'disease_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getPatientsDiseases(){
            return patientsDiseasesResource::collection(patientsDiseases::all());
        }
        public function changePatientsDiseases($id){
            return patientsDiseases::where('id',$id)->update(array('disease_id'=>'D01'));
        }
        public function removePatientsDiseases($id){
            return patientsDiseases::where('id',$id)->delete();
        }
}

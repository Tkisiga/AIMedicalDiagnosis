<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientsSymptoms;
use App\Http\Resources\patientsSymptomsResource;

class patientsSymptomsController extends Controller
{
    public function createPatientsSymptoms(){
        return patientsSymptoms::create($this->validatePatientsSymptoms());
    }
    protected function validatePatientsSymptoms(){
        return request()->validate([
            'patient_id'=>'required',
            'symptom_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getPatientsSymptoms(){
            return patientsSymptomsResource::collection(patientsSymptoms::all());
        }
        public function changePatientsSymptoms($id){
            return patientsSymptoms::where('id',$id)->update(array('patient_id'=>'P01'));
        }
        public function removePatientsSymptoms($id){
            return patientsSymptoms::where('id',$id)->delete();
        }
}

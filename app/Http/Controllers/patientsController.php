<?php

namespace App\Http\Controllers;

use App\patients;
use Illuminate\Http\Request;
use App\Http\Resources\patientsResource;

class patientsController extends Controller
{
    public function createPatients(){
        return patients::create($this->validatePatient());
    }

    protected function validatePatient(){
        return request()->validate([
            'patients_id'=>'required',
            'age'=>'required',
            'sex'=>'required',
            'lab_results'=>'required',
            'updated_by'=>'required'
            ]);
    }
    public function getPatient(){
        return patientsResource::collection(patients::all());
    }
    public function changePatient($id){
        patients::where('id',$id)->delete();
    }
}

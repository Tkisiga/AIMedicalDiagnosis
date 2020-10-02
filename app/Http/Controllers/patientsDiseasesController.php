<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientsDiseases;
use App\Http\Resources\patientsDiseasesResource;

class patientsDiseasesController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
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
            $patientsDiseases= patientsDiseasesResource::collection(patientsDiseases::all());
           // return view('admin_pages.template',compact('patientsDiseases'));
        }
        public function changePatientsDiseases($id){
            patientsDiseases::find($id)->update();
            return redirect()->back()->with('msg', "Your changes were made successfully");
        }
        public function removePatientsDiseases($id){
            patientsDiseases::find($id)->delete();
            return redirect()->back();
        }
}

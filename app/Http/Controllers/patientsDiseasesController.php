<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientsDiseases;
use App\Http\Resources\patientsDiseasesResource;

class patientsDiseasesController extends Controller
{
    public function __construct(){
       // $this->middleware('auth'); 
       $this->authenticated_instance = new AuthenticatedController; 
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
            $patientsDiseases= patientsDiseases::join('Patients','PatientsDiseases.patient_id','Patients.id')
            ->join('Diseases','PatientsDiseases.disease_id','Diseases.id')->get();
           // return view('admin_pages.template',compact('patientsDiseases'));
        }
        public function changePatientsDiseases($id){
            patientsDiseases::where('id',$id)->update(array(
                'patient_id' => request()->patient_id,
                'disease_id' => request()->disease_id,
                'updated_by' => $this->authenticated_instance->getAuthenticatedUser()
            ));
            return redirect()->back()->with('msg', "Your changes were made successfully");
        }
        public function removePatientsDiseases($id){
            patientsDiseases::find($id)->delete();
            return redirect()->back();
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientsClinicFindings;
use App\Http\Resources\patientsClinicFindingsResource;

class patientsClinicFindingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    
    public function createpatientsClinicFindings(){
        return patientsClinicFindings::create($this->validatePatientsClinicFindings());
    }
    protected function validatePatientsClinicFindings(){
        return request()->validate([
            'patient_id'=>'required',
            'symptom_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getPatientsClinicFindings(){
            $patientsClinicFindings= patientsClinicFindingsResource::collection(patientsClinicFindings::all());
            //return view('admin_pages.template',compact('patientsClinicFindings'));
        }
        public function changePatientsClinicFindings($id){
            patientsClinicFindings::find($id)->update();
            return redirect()->back()->with('msg', "Your changes were made successfully");
        }
        public function removePatientsClinicFindings($id){
            patientsClinicFindings::find($id)->delete();
            return redirect()->back();
        }
}

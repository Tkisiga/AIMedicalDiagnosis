<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clinicFindings;
use App\Http\Resources\clinicFindingsResource;

class clinicFindingsController extends Controller
{
    public function createClinicFindings()
    {
        return clinicFindings::create($this->validateClinicFindings());
    }
    protected function validateClinicFindings()
    {
        return request()->validate([
        'clinic_findings_id'=> 'required',
        'patient_history_id'=>'required',
        'general_appearance_id'=>'required',
        'physical_examination_id'=>'required',
        'updated_by'=>'required'
        ]);
    }
    public function getClinicFindings(){
        return clinicFindingsResource::collection(clinicFindings::all());
    }
    public function changeClinicFindings($id){
        clinicFindings::where('id',$id)->update(array('clinic_findings_id'=>'1'));
    }
    public function deleteClinicFindings($id){
        clinicFindings::where('id',$id)->delete();
    }
}

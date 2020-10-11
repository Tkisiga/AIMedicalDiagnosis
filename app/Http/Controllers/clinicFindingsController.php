<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clinicFindings;
use App\Http\Resources\clinicFindingsResource;

class clinicFindingsController extends Controller
{
    public function __construct(){
        // $this->middleware('auth'); 
         $this->authenticated_instance = new AuthenticatedController; 
     }
    public function createClinicFindings()
    {
        return clinicFindings::create($this->validateClinicFindings());
    }
    public function validateClinicFindings()
    {
        return request()->validate([
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
        clinicFindings::where('id',$id)->update(array(
            'patient_history_id' => request()->patient_history_id,
            'general_appearance_id' => request()->general_appearance_id,
            'physical_examination_id' => request()->physical_examination_id,
            'updated_by' => $this->authenticated_instance->getAuthenticatedUser(),
            'created_by' => $this->authenticated_instance->getAuthenticatedUser()
            ));
    }
    public function deleteClinicFindings($id){
        clinicFindings::where('id',$id)->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ageGroupTreatment;
use App\Http\Resources\ageGroupTreatmentResource;

class ageGroupTreatmentController extends Controller
{
    public function createAgeGroupTreatment(){
        return ageGroupTreatment::create($this->validateAgeGroupTreatment());
    }
    protected function validateAgeGroupTreatment(){
        return request()->validate([
            'ageGroup_id'=>'required',
            'treatment_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getAgeGroupTreatment(){
            return ageGroupTreatmentResource::collection(ageGroupTreatment::all());
        }
        public function changeAgeGroupTreatment($id){
            return ageGroupTreatment::where('id',$id)->update(array('treatment_id'=>'TMT01'));
        }
        public function removeAgeGroupTreatment($id){
            return ageGroupTreatment::where('id',$id)->delete();
        }
}

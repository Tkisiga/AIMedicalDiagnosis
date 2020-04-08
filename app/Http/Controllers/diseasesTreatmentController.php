<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diseasesTreatment;
use App\Http\Resources\diseasesTreatmentResource;

class diseasesTreatmentController extends Controller
{
    public function createDiseasesTreatment(){
        return diseasesTreatment::create($this->validateDiseasesTreatment());
    }
    protected function validateDiseasesTreatment(){
        return request()->validate([
            'disease_id'=>'required',
            'treatment_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getDiseasesTreatment(){
            return diseasesTreatmentResource::collection(diseasesTreatment::all());
        }
        public function changeDiseasesTreatment($id){
            return diseasesTreatment::where('id',$id)->update(array('treatment_id'=>'TMT01'));
        }
        public function removeDiseasesTreatment($id){
            return diseasesTreatment::where('id',$id)->delete();
        }
}

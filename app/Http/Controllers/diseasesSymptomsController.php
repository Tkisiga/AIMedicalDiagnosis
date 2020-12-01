<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diseasesSymptoms;
use App\Http\Resources\diseasesSymptomsResource;

class diseasesSymptomsController extends Controller
{
    public function createDiseasesSymptoms(){
        return diseasesSymptoms::create($this->validateDiseasesSymptoms());
    }
    protected function validateDiseasesSymptoms(){
        return request()->validate([
            'disease_id'=>'required',
            'symptom_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getDiseasesSymptoms(){
            return diseasesSymptomsResource::collection(diseasesSymptoms::all());
        }
        public function changeDiseasesSymptoms($id){
            return diseasesSymptoms::where('id',$id)->update(array('symptom_id'=>'SM01'));
        }
        public function removeDiseasesSymptoms($id){
            return diseasesSymptoms::where('id',$id)->delete();
        }
}

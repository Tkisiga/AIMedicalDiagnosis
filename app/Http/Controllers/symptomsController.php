<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\symptomsResource;
use App\symptoms;

class symptomsController extends Controller
{
    public function createSymptoms(){
        return symptoms::create($this->validateSymptoms());
    }
    protected function validateSymptoms(){
        return request()->validate([
            'symptom_id'=>'required',
            'name'=>'required',
            'updated_by'=>'required'
        ]);
    }
    public function getSymptoms(){
        return symptomsResource::collection(symptoms::all());
    }
    public function changeSymptoms($id){
        symptoms::where('id',$id)->update(array('symptom_id'=>'SM01'));
    }
    public function deleteSymptoms($id){
        symptoms::where('id',$id)->delete();
    }
    
}
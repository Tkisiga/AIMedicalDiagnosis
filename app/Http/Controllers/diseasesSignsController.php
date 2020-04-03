<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diseasesSigns;
use App\Http\Resources\diseasesSignsResource;

class diseasesSignsController extends Controller
{
    public function createDiseasesSigns(){
        return diseasesSigns::create($this->validateDiseasesSigns());
    }
    protected function validateDiseasesSigns(){
        return request()->validate([
            'disease_id'=>'required',
            'sign_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getDiseasesSigns(){
            return diseasesSignsResource::collection(diseasesSigns::all());
        }
        public function changeDiseasesSigns($id){
            return diseasesSigns::where('id',$id)->update(array('sign_id'=>'SN01'));
        }
        public function removeDiseasesSigns($id){
            return diseasesSigns::where('id',$id)->update(array('sign_id'=>'SN01'));
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\diseasesResource;
use App\diseases;

class diseasesController extends Controller
{
    public function createDiseases(){
        return diseases::create($this->validateDiseases());
    }
    protected function validateDiseases(){
        return request()->validate([
            'disease_id'=>'required',
            'name'=>'required',
            'updated_by'=>'required'
        ]);
}
public function getDiseases(){
    return diseasesResource::collection(diseases::all());
}
public function changeDiseases($id){
    diseases::where('id',$id)->update(array('disease_id'=>'D01'));
}
public function deleteDisease($id){
    diseases::where('id',$id)->delete();
}
}


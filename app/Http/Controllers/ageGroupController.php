<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ageGroup;
use App\Http\Resources\ageGroupResource;

class ageGroupController extends Controller
{
    public function createAgeGroup(){
        return ageGroup::create($this->validateAgeGroup());
    }
    protected function validateAgeGroup(){
        return request()->validate([
            'ageGroup_id'=>'required',
            'age'=>'required',
            'updated_by'=>'required'
        ]);
    }
    public function getAgeGroup(){
        return ageGroupResource::collection(AgeGroup::all());
    }
    public function changeAgeGroup($id){
        return ageGroup::where('id',$id)->update(array('ageGroup_id'=>'AG01'));
    }
    public function deleteAgeGroup($id){
        return ageGroup::where('id',$id)->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\treatment;
use App\Http\Resources\treatmentResource;

class treatmentController extends Controller
{
    public function createTreatment(){
        return treatment::create($this->validateTreatment());
    }
    protected function validateTreatment(){
        return request()->validate([
            'treatment_id'=>'required',
            'name'=>'required',
            'updated_by'=>'required'
        ]);
    }
    public function getTreatment(){
        return treatmentResource::collection(treatment::all());
    }
    public function changeTreatment($id){
        return treatment::where('id',$id)->update(array('treatment_id'=>'TMT01'));
    }
    public function removeTreatment($id){
        return treatment::where('id',$id)->delete();
    }
}

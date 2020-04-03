<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\signs;
use App\Http\Resources\signsResource;

class signsController extends Controller
{
    public function createSigns()
    {
        return signs::create($this->validateSigns());
    }
    protected function validateSigns()
    {
        return request()->validate([
        'sign_id'=> 'required',
        'name'=>'required',
        'updated_by'=>'required'
        ]);
    }
    public function getSigns(){
        return signsResource::collection(signs::all());
    }
    public function changeSigns($id){
        signs::where('id',$id)->update(array('sign_id'=>'SN01'));
    }
    public function deleteSigns($id){
        signs::where('id',$id)->update(array('sign_id'=>'SN01'));
    }
}

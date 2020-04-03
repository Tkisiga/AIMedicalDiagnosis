<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\management;
use App\Http\Resources\managementResource;

class managementController extends Controller
{
    public function createManagement(){
        return management::create($this->validateManagement());
    }
    protected function validateManagement(){
        return request()->validate([
            'management_id'=>'required',
            'name'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getManagement(){
            return managementResource::collection(management::all());
        }
        public function changeManagement($id){
            return management::where('id',$id)->update(array('management_id'=>'MGT01'));
        }
        public function removeManagement($id){
            return management::where('id',$id)->update(array('management_id'=>'MGT01'));
        }
}

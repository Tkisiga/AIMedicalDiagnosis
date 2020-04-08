<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\permissions;
use App\Http\Resources\permissionsResource;

class permissionsController extends Controller
{
    public function createPermissions(){
        return permissions::create($this->validatePermissions());
    }
    protected function validatePermissions(){
        return request()->validate([
        'permissions'=>'required',
        'permission_ID'=>'required',
        'updated_by'=>'required'
        ]);
    }
    public function getPermissions(){
        return permissionsResource::collection(permissions::all());
    }
    public function changePermissions($id){
        return permissions::where('id',$id)->update(array('permission_ID'=>'ND01'));
    }
    public function deletePermissions($id){
        return permissions::where('id',$id)->delete();
    }
}


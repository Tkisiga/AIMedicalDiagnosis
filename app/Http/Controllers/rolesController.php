<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\roles;
use App\Http\Resources\rolesResource;

class rolesController extends Controller
{
    public function createRoles(){
       return roles::create($this->validateRoles());
    }
    protected function validateRoles(){
        return request()->validate([
            'role_ID'=>'required',
            'title'=>'required',
            'updated_by'=>'required'
        ]);
    }
    public function getRoles(){
        return rolesResource::collection(roles::all());
    }
    public function changeRoles($id){
        return roles::where('id',$id)->update(array('role_ID'=>'R01'));
    }
    public function deleteRoles($id){
        return roles::where('id',$id)->delete();
    }
}

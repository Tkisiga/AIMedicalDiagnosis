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
        'updated_by'=>'required'
        ]);
    }
    public function getPermissions(){
        $permissions= permissionsResource::collection(permissions::all());
       // return view('admin_pages.template',compact('permissions'));
    }
    public function changePermissions($id){
        permissions::find($id)->update();
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    public function deletePermissions($id){
        permissions::find($id)->delete();
        return redirect()->back();
    }
}


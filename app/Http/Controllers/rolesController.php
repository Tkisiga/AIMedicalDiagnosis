<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\roles;
use App\Http\Resources\rolesResource;

class rolesController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }
    public function createRoles(){
       return roles::create($this->validateRoles());
    }
    protected function validateRoles(){
        return request()->validate([
            'role_id'=>'required',
            'title'=>'required',
            'updated_by'=>'required'
        ]);
    }
    public function getRoles(){
        $roles= rolesResource::collection(roles::all());
        //return view('admin_pages.template',compact('roles'));
    }
    public function changeRoles($id){
        roles::find($id)->update();
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    public function deleteRoles($id){
        roles::find($id)->delete();
        return redirect()->back();
    }
}

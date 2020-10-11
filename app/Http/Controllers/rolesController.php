<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\roles;
use App\Http\Resources\rolesResource;

class rolesController extends Controller
{
    public function __construct(){
       // $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }
    public function createRoles(){
        $roles                    = new roles;
        $roles->title              = request()->title;
        $roles->created_by        = $this->authenticated_instance->getAuthenticatedUser();
        $roles->save();
    }
    protected function validateRoles(){
        if(empty(request()->title)){
            return redirect()->back()->withErrors("Please enter your role ");
        }else{    
            return $this->createRoles();
    }
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

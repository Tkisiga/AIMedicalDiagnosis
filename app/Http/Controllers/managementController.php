<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\management;
use App\Http\Resources\managementResource;

class managementController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }
    public function getAllManagement(){
        $allmanagement=management::get();
        return $allmanagement;
    }

    private function createManagement(){
        $management                    = new management;
        $management->name              = request()->name;
        $management->created_by        = $this->authenticated_instance->getAuthenticatedUser();
        $management->save();
        
    }
    protected function validateManagement(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors("Please enter your name");
        }else{
            return $this->createManagement();
        }
    }    
    protected function getManagement(){
        $management= managementResource::collection(management::all());
        //return view('admin_pages.template',compact('management'));
    }
    protected function changeManagement($id){
        return management::find($id)->update(array(
        'name' => request()->name,
    ));
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    protected function removeManagement($id){
        management::find($id)->delete();
        return redirect()->back();
    }
}

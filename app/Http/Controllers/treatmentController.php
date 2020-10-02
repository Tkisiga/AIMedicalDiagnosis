<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\treatment;
use App\Http\Resources\treatmentResource;

class treatmentController extends Controller
{
    public function __construct(){
        $this->authenticated_instance = new AuthenticatedController; 
        $this->middleware('auth');
    }
    
    public function createTreatment(){
        $treatment                    = new treatment;
        $treatment->name              = request()->name;
        $treatment->created_by        = $this->authenticated_instance->getAuthenticatedUser();
        $treatment->save();
    }
    protected function validateTreatment(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors("Please enter the treatment");
        }else{
            return $this->createTreatment();
        }
    }
    public function getTreatment(){
        $treatment= treatmentResource::collection(treatment::all());
        return view('admin_pages.template',compact('treatment'));
    }
    public function changeTreatment($id){
        treatment::find($id)->update();
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    public function removeTreatment($id){
        treatment::find($id)->delete();
        return redirect()->back();
    }
}

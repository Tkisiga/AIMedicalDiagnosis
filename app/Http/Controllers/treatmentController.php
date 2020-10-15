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
    public function getAllTreatment(){
        $alltreatment=treatment::get();
    }
    
    private function createTreatment(){
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
    protected function getTreatment(){
        $treatment= treatmentResource::collection(treatment::all());
        return view('admin_pages.template',compact('treatment'));
    }
    protected function changeTreatment($id){
        treatment::find($id)->update();
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    protected function removeTreatment($id){
        treatment::find($id)->delete();
        return redirect()->back();
    }
}

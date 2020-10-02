<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ageGroupTreatment;
use App\Http\Resources\ageGroupTreatmentResource;

class ageGroupTreatmentController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    public function createAgeGroupTreatment(){
        return ageGroupTreatment::create($this->validateAgeGroupTreatment());
    }
    protected function validateAgeGroupTreatment(){
        return request()->validate([
            'ageGroup_id'=>'required',
            'treatment_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getAgeGroupTreatment(){
            $ageGroupTreatment= ageGroupTreatmentResource::collection(ageGroupTreatment::paginate(10));
            //return view('admin_pages.template',compact('ageGroup'));
        }
        public function changeAgeGroupTreatment($id){
            ageGroupTreatment::find($id)->update();
            return redirect()->back()->with('msg', "Your changes were made successfully");
        }
        public function removeAgeGroupTreatment($id){
            ageGroupTreatment::find($id)->delete();
            return redirect()->back();
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diseasesTreatment;
use App\Http\Resources\diseasesTreatmentResource;

class diseasesTreatmentController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    public function createDiseasesTreatment(){
        return diseasesTreatment::create($this->validateDiseasesTreatment());
    }
    protected function validateDiseasesTreatment(){
        return request()->validate([
            'disease_id'=>'required',
            'treatment_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getDiseasesTreatment(){
            $diseasesTreatment= diseasesTreatmentResource::collection(diseasesTreatment::all());
            //return view('admin_pages.template',compact('diseasesTreatment'));
        }
        public function changeDiseasesTreatment($id){
            diseasesTreatment::find($id)->update();
            return redirect()->back()->with('msg', "Your changes were made successfully");
        }
        public function removeDiseasesTreatment($id){
            diseasesTreatment::find($id)->delete();
            return redirect()->back();
        }
}

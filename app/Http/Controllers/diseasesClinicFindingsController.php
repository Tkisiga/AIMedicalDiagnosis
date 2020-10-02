<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diseasesClinicFindings;
use App\Http\Resources\diseasesClinicFindingsResource;

class diseasesClinicFindingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    public function createDiseasesClinicFindings(){
        return diseasesClinicFindings::create($this->validateDiseasesClinicFindings());
    }
    protected function validateDiseasesClinicFindings(){
        return request()->validate([
            'disease_id'=>'required',
            'symptom_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getDiseasesClinicFindings(){
            $diseasesClinicFindings= diseasesClinicFindingsResource::collection(diseasesClinicFindings::all());
            //return view('admin_pages',compact('diseasesClinicFindings'));
        }
        public function changeDiseasesClinicFindings($id){
            diseasesClinicFindings::find($id)->update();
            return redirect()->back()->with('msg', "Your changes were made successfully");
        }
        public function removeDiseasesClinicFindings($id){
            diseasesClinicFindings::find($id)->delete();
            return redirect()->back();
        }
}

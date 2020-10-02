<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diseasesManagement;
use App\Http\Resources\diseasesManagementResource;

class diseasesManagementController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    public function createDiseasesManagement(){
        return diseasesManagement::create($this->validateDiseasesManagement());
    }
    protected function validateDiseasesManagement(){
        return request()->validate([
            'disease_id'=>'required',
            'management_id'=>'required',
            'updated_by'=>'required'
        ]);
        }    
        public function getDiseasesManagement(){
            $diseasesManagement= diseasesManagementResource::collection(diseasesManagement::all());
           // return view('admin_pages.template',compact('diseasesManagement'));
        }
        public function changeDiseasesManagement($id){
            diseasesManagement::find($id)->update();
            return redirect()->back()->with('msg', "Your changes were made successfully");
        }
        public function removeDiseasesManagement($id){
            diseasesManagement::find($id)->delete();
            return redirect()->back();
        }
}

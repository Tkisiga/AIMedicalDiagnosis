<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diseasesManagement;
use App\Http\Resources\diseasesManagementResource;

class diseasesManagementController extends Controller
{
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
            return diseasesManagementResource::collection(diseasesManagement::all());
        }
        public function changeDiseasesManagement($id){
            return diseasesManagement::where('id',$id)->update(array('management_id'=>'MNT01'));
        }
        public function removeDiseasesManagement($id){
            return diseasesManagement::where('id',$id)->update(array('management_id'=>'MNT01'));
        }
}

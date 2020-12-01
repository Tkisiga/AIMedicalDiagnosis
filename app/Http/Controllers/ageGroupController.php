<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ageGroup;
use App\Http\Resources\ageGroupResource;

class ageGroupController extends Controller
{
    public function __construct(){
       // $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }

    public function getAllAgeGroup(){
        $allageGroup=ageGroup::get();
        return response()->json(allageGroup);
    }
    private function createAgeGroup(){
        $ageGroup                    = new ageGroup;
        $ageGroup->age               = request()->age;
        $ageGroup->created_by        = $this->authenticated_instance->getAuthenticatedUser();
        $ageGroup->save();
    }
    protected function validateAgeGroup(){
        if(empty(request()->age)){
            return redirect()->back()->withErrors("Please enter your age");
        }else{
            return $this->createAgeGroup();
        }
    }
    protected function getAgeGroup(){
        $ageGroup= ageGroupResource::collection(ageGroup::all());
        //return view('admin_pages.template',compact('ageGroup'));
    }
    protected function changeAgeGroup($id){
        return ageGroup::find($id)->update(array(
            'age' => request()->age,
        ));
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    protected function deleteAgeGroup($id){
        ageGroup::find($id)->delete();
        return redirect()->back();
    }
}

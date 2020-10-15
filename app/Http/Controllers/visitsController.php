<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visits;
use App\Http\Resources\visitsResource;

class visitsController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }
    protected function getCreateVisitsForm(){
        return view('admin_forms.visits_reg_form');
    }
    protected function getEditVisitsForm(){
        return view('admin_forms.visits_edit_form', compact('edit_visits'));
    }
    public function getAllVisits(){
        $allvisits=visits::get();
    }
    private function createVisits(){
        $visits                    = new visits;
        $visits->visit_date        = request()->visit_date;
        $visits->visit_category    = request()->visit_category;
        $visits->next_visit        = request()->next_visit;
        $visits->created_by        = $this->authenticated_instance->getAuthenticatedUser();
        $visits->save();
        return redirect()->back()->with('message', "Successfully added a new visit");
        
    }
    protected function validateVisits(){
            if(empty(request()->visit_date)){
                return redirect()->back()->withErrors("Please enter your visit_date");
            }elseif(empty(request()->visit_category)){
                return redirect()->back()->withErrors("Please enter your visit_category");
            }elseif(empty(request()->next_visit)){
                return redirect()->back()->withErrors("Please enter your next_visit");
            }else{    
                return $this->createVisits();
            }
    }
    protected function getVisits(){
        $visits= visitsResource::collection(visits::paginate(10));
        return view('admin_forms.get_visits',compact('visits'));
    }
    protected function changeVisits($id){
        return visits::find($id)->update(array(
            'patient_id' => request()->patient_id,
            'visit_date' => request()->visit_date,
            'visit_category' => request()->visit_category,
            'next_visit'=>request()->next_visit,
        ));
        return redirect()->back()->with('message', "Your changes were made successfully");
    }
    protected function deleteVisits($id){
        visits::find($id)->delete();
        return redirect()->back()->with('message', "The details have been deleted ");
    }
}

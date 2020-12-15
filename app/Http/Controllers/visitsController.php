<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\visits;
use App\patients;
use App\Http\Resources\visitsResource;

class visitsController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }
    protected function getCreateVisitsForm(){
        $patients = patients::get();
        return view('admin_forms.visits_reg_form', compact('patients'));
    }
    protected function getEditVisitsForm($id){
        $edit_visits = visits::where('id',$id)->get();
        return view('admin_forms.visits_edit_form', compact('edit_visits'));
    }
    public function getAllVisits(){
        $allvisits=visits::get();
        return $allvisits;
    }
    private function createVisits(){
        $visits                    = new visits;
        $visits->patient_name      = request()->patient_name;
        $visits->visit_date        = request()->visit_date;
        $visits->visit_category    = request()->visit_category;
        $visits->next_visit        = request()->next_visit;
        $visits->created_by        = $this->authenticated_instance->getAuthenticatedUser();
        $visits->save();
        return redirect()->back()->with('message', "Successfully added a new visit");
        
    }
    protected function validateVisits(){
            if(empty(request()->patient_name)){
                return redirect()->back()->withErrors("Please select or enter the patient name");
            }else
            if(empty(request()->visit_date)){
                return redirect()->back()->withErrors("Please enter your visit_date");
            }elseif(empty(request()->visit_category)){
                return redirect()->back()->withErrors("Please enter your visit_category");
            }elseif(empty(request()->next_visit)){
                return redirect()->back()->withErrors("Please enter your next_visit");
            }else{    
                return $this->createVisits(appointment_date);
            }
    }

public function searchPatient(Request $request)
{
  if($request->input('query')){
    $query = $request->input('query');
    $data = array();
    $items = DB::table("Patients")->where("name", "like", "%".$query."%")->get();
    foreach($items as $item){
      $data[] = $item->name;
    }
    echo json_encode($data);
  }

}


public function searchPatientModal(Request $request)
{
  if($request->input('query')){
    $query = $request->input('query');
    $data = array();
    $items = DB::table("Patients")->where("name", "like", "%".$query."%")->get();
    foreach($items as $item){
      $data[] = $item->name;
    }
    echo json_encode($data);
  }

}




    protected function getVisits(){
        $visits= visitsResource::collection(visits::paginate(10));
        return view('admin_forms.get_visits',compact('visits'));
    }
    protected function changeVisits($id){
        if(empty(request()->patient_name)){
            return redirect()->back()->withErrors("Please select or enter the patient name ");
        }elseif(empty(request()->visit_date)){
            return redirect()->back()->withErrors("Please enter your visit_date");
        }elseif(empty(request()->visit_category)){
            return redirect()->back()->withErrors("Please enter your visit_category");
        }elseif(empty(request()->next_visit)){
            return redirect()->back()->withErrors("Please enter your next_visit");
        }
        visits::find($id)->update(array(
            'patient_name' => request()->patient_name,
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

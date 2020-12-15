<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clinicFindings;
use App\patients;
use App\treatment;
use App\management;
use App\Http\Resources\clinicFindingsResource;

class clinicFindingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
         $this->authenticated_instance = new AuthenticatedController; 
     }

    public function getAllClinicFindings(){
        $allclinicFindings=clinicFindings::get();
        return response()->json(allclinicFindings);
    } 
    public function createClinicFindings(Request $request)
    {
        $request ->merge([
            'symptoms' => implode(',', (array) $request->get('symptoms'))
        ]);
        //dd($request->all());
        $findings = clinicFindings::create($request->all());
        $patient = patients::where('id', $findings->patient_id)->first();
        $treatment = treatment::get();
        $management = management::get();
      //  return redirect()->back()->with('message', "Your changes were made successfully");
      return view('admin_forms.DiagnosisForm',compact('patient', 'treatment', 'management'));
    }
    
    protected function getCreateClinicFindingsForm(){
        $patients = patients::get();
        return view('admin_forms.clinic_findings_form', compact('patients'));
    }
    protected function getEditClinicFindingsForm(){
        $edit_clinicFindings = clinicFindings::where('id',$id)->get();
        return view('admin_form.edit_clinic_findings_form', compact('edit_clinicFindings','patient_name'));
    }

    protected function validateClinicFindings()
    {
        if(empty(request()->symptoms)){
            return redirect()->back()->withErrors("Please enter your first name ");
        }else{    
            return $this->createClinicFindings();
            }
    }
    protected function getClinicFindings(){
        return clinicFindingsResource::collection(clinicFindings::all());
    }
    protected function changeClinicFindings($id){
        clinicFindings::where('id',$id)->update(array(
            'symptoms'                => request()->symptoms
            ));
            return redirect()->back()->with('message', "Your changes were made successfully");
    }
    protected function deleteClinicFindings($id){
        clinicFindings::where('id',$id)->delete();
        return redirect()->back()->with('message', "Your changes were made successfully");
    }
}

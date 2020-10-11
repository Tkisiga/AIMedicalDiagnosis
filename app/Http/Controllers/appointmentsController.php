<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appointments;
use App\Http\Resources\appointmentsResource;

class appointmentsController extends Controller
{
    public function __construct(){
        // $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }

    public function createAppointments(){
        $appointments                         = new appointments;
        $appointments->patient_id             = request()->patient_id;
        $appointments->appointment_date       = request()->appointment_date;
        $appointments->appointment_time       = request()->appointment_time;
        $appointments->status                 = request()->status;
        $appointments->medical_practitioner_id  =request()->medical_practitioner_id;
        $appointments->created_by               = $this->authenticated_instance->getAuthenticatedUser();
       // $appointments->save();
        return view('admin_forms.get_appointments',compact('appointments'));
    }
    protected function validateAppointments(){
        if(empty(request()->patient_id)){
            return redirect()->back()->withErrors("Please enter patient_id");
        }elseif(empty(request()->appointment_date)){
            return redirect()->back()->withErrors("Please enter your appointment_date");
        }elseif(empty(request()->appointment_time)){
            return redirect()->back()->withErrors("Please enter your appointment_time");
        }elseif(empty(request()->status)){
            return redirect()->back()->withErrors("Please enter your status");
        }elseif(empty(request()->medical_practitioner_id)){
            return redirect()->back()->withErrors("Please enter your medical_practitioner_id");
        }else{    
            return $this->createMedicalPractitioners();
        }
    }
    public function getappointments(){
        $appointments= appointmentsResource::collection(appointments::paginate(10));
        return view('admin_forms.get_appointments',compact('appointments'));
    }
    public function changeAppointments($id){
        return appointments::find($id)->update(array(
            'patient_id'       => request()->patient_id,
            'appointment_date' => request()->appointment_date,
            'appointment_time' => request()->appointment_time,
            'status'           => request()->status,
            'medical_practitioner_id' => request()->medical_practitioner_id,
        ));
        return redirect()->back()->with('msg', "Your changes were made successfully");
    }
    public function deleteAppointments($id){
        appointments::find($id)->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\appointments;
use App\Http\Resources\appointmentsResource;

class appointmentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }
    public function getAllAppointments(){
        $allappointments=appointments::get();
    }

    protected function getCreateAppointmentsForm(){
        return view('admin_forms.appointment_reg_form');
    }
    protected function getEditAppointmentsForm(){
        return view('admin_forms.appointment_edit_form',compact('edit_appointments'));
    }
    private function createAppointments(){
        $appointments                         = new appointments;
        $appointments->appointment_date       = request()->appointment_date;
        $appointments->appointment_time       = request()->appointment_time;
        $appointments->status                 = request()->status;
        $appointments->medical_practitioner_id  =request()->medical_practitioner_id;
        $appointments->created_by               = $this->authenticated_instance->getAuthenticatedUser();
        $appointments->save();
        return redirect()->back()->with('message',"New appointment has been created successfuly");
       
    }
    protected function validateAppointments(){
        if(empty(request()->appointment_date)){
            return redirect()->back()->withErrors("Please enter the appointment date");
        }elseif(empty(request()->appointment_time)){
            return redirect()->back()->withErrors("Please enter the appointment time");
        }elseif(empty(request()->status)){
            return redirect()->back()->withErrors("Please enter your status");
        }elseif(empty(request()->medical_practitioner_id)){
            return redirect()->back()->withErrors("Please enter your medical_practitioner_id");
        }else{    
            return $this->createAppointments();
        }
    }
    protected function getappointments(){
        $appointments= appointmentsResource::collection(appointments::paginate(10));
        return view('admin_forms.get_appointments',compact('appointments'));
    }
    protected function changeAppointments($id){
        return appointments::find($id)->update(array(
            'appointment_date' => request()->appointment_date,
            'appointment_time' => request()->appointment_time,
            'status'           => request()->status,
            'medical_practitioner_id' => request()->medical_practitioner_id,
        ));
        return redirect()->back()->with('message', "Your changes were made successfully");
    }
    protected function deleteAppointments($id){
        appointments::find($id)->delete();
        return redirect()->back()->with('message', "Your changes were made successfully");
    }
}

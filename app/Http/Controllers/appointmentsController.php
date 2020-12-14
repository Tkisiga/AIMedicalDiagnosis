<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patients; 
use App\User; 
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
        $patients = patients::get();
        $users = User::get();
        return view('admin_forms.appointment_reg_form', compact('patients','users'));
    }
    protected function getEditAppointmentsForm($id){
        $edit_appointments = appointments::where('id',$id)->get();
        $patients = patients::get();
        $users = User::get();
        return view('admin_forms.appointment_edit_form',compact('edit_appointments','patients','users'));
    }
    private function createAppointments(){
        $appointments                             = new appointments;
        $appointments->patient_name                 = request()->patient_name;
        $appointments->appointment_date           = request()->appointment_date;
        $appointments->appointment_time           = request()->appointment_time;
        $appointments->status                     = request()->status;
        $appointments->medical_practitioner_name    =request()->medical_practitioner_name;
        $appointments->created_by                 = $this->authenticated_instance->getAuthenticatedUser();
        $appointments->save();
        return redirect()->back()->with('message',"New appointment has been created successfuly");
       
    }
    protected function validateAppointments(){
        if(empty(request()->patient_name)){
            return redirect()->back()->withErrors("Please select the patient");
        }elseif(empty(request()->medical_practitioner_name)){
            return redirect()->back()->withErrors("Please select the medical practitioner");
        }elseif(empty(request()->appointment_date)){
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


    public function searchPatient(Request $request){
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


    public function searchPatientModal(Request $request){
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
    public function searchMPractitioner(Request $request){
        if($request->input('query')){
            $query = $request->input('query');
            $data = array();
            $items = DB::table("user")->where("name", "like", "%".$query."%")->get();
            foreach($items as $item){
                $data[] = $item->name;
            }
            echo json_encode($data);
        }

    }
    public function searchMPractitionerModal(Request $request){
        if($request->input('query')){
            $query = $request->input('query');
            $data = array();
            $items = DB::table("user")->where("name", "like", "%".$query."%")->get();
            foreach($items as $item){
                $data[] = $item->name;
            }
            echo json_encode($data);
        }

    }

    protected function getappointments(){
        $appointments= appointmentsResource::collection(appointments::paginate(10));
        $patients = patients::get();
        $users = User::get();
        return view('admin_forms.get_appointments',compact('appointments','patients','users'));
    }
    protected function changeAppointments($id){
        if(empty(request()->patient_name)){
            return redirect()->back()->withErrors("Please select the patient");
        }elseif(empty(request()->medical_practitioner_name)){
            return redirect()->back()->withErrors("Please select the medical practitioner");
        }elseif(empty(request()->appointment_date)){
            return redirect()->back()->withErrors("Please enter the appointment date");
        }elseif(empty(request()->appointment_time)){
            return redirect()->back()->withErrors("Please enter the appointment time");
        }elseif(empty(request()->status)){
            return redirect()->back()->withErrors("Please enter your status");
        }
        appointments::find($id)->update(array(
            'patient_name'     => request()->patient_name,
            'appointment_date' => request()->appointment_date,
            'appointment_time' => request()->appointment_time,
            'status'           => request()->status,
            'medical_practitioner_name' => request()->medical_practitioner_name,
        ));
        return redirect()->back()->with('message', "Your changes were made successfully");
    }
    protected function deleteAppointments($id){
        appointments::find($id)->delete();
        return redirect()->back()->with('message', "Your changes were made successfully");
    }
}

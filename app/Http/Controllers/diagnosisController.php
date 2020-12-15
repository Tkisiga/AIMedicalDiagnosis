<?php

namespace App\Http\Controllers;

use App\patients;
use App\treatment;
use App\management;
use Illuminate\Http\Request;
use App\Http\Resources\diagnosisResource;

class diagnosisController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }

    /**
     * this function takes to the blade that has the create patients form
     */
    protected function getCreateDiagnosisForm(){
        $patients = patients::get();
        $patients = treatment::get();
        $patients = management::get();
        return view('admin_forms.DiagnosisForm'); 
    }  

}

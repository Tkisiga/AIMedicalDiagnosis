<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function __construct(){
        $this->patients_instance = new patientsController;
    }
    
    protected function getAllPatients(){
        $allpatients = $this->patients_instance->getPatients();
        return response()->json($allpatients);
    }
}

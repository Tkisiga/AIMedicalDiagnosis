<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patientsDiseases extends Model
{
    protected $table='PatientsDiseases';
    protected $fillable=['patient_id','disease_id','created_by','updated_by'];
}

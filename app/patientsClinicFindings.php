<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patientsClinicFindings extends Model
{
    protected $table='PatientsClinicFindings';
    protected $fillable=['patient_id','clinic_findings_id','created_by','updated_by'];
}

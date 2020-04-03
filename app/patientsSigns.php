<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patientsSigns extends Model
{
    protected $table='PatientsSigns';
    protected $fillable=['patient_id','sign_id','updated_by'];
}

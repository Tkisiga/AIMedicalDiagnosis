<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patientsSymptoms extends Model
{
    protected $table='PatientsSymptoms';
    protected $fillable=['patient_id','symptom_id','updated_by'];
}

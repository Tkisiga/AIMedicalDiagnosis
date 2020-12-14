<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointments extends Model
{
    protected $table = "Appointments";
    protected $fillable=['patient_name','medical_practitioner_name','appointment_date','appointment_time','status','created_by','updated_by',];
}

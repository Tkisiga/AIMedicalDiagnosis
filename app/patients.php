<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    protected $table = "Patients";
    protected $fillable=['patient_id','first_name','last_name','other_names','phone_number',
    'gender','age','created_by','updated_by',];
}

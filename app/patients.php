<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    protected $table = "Patients";
    protected $fillable=['first_name','last_name','other_name','phone_number','address','join_date',
    'gender','age','created_by','updated_by',];
}

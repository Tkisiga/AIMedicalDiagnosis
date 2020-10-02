<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicalPractitioners extends Model
{
    protected $table ='MedicalPractitioners';
    protected $fillable =['name','password','email','role_id','phone_No','created_by','updated_by'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicalPractitioners extends Model
{
    protected $table ='MedicalPractitioners';
    protected $fillable =['name','password','email','roleID','phone_No','updated_by'];
}

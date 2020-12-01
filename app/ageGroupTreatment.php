<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ageGroupTreatment extends Model
{
    protected $table='AgeGroupTreatment';
    protected $fillable=['ageGroup_id','treatment_id','created_by','updated_by'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ageGroup extends Model
{
    protected $table='AgeGroup';
    protected $fillable=['age','created_by','updated_by'];
}

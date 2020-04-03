<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diseasesSigns extends Model
{
    protected $table='DiseasesSigns';
    protected $fillable=['disease_id','sign_id','updated_by'];
}

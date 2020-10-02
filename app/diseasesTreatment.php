<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diseasesTreatment extends Model
{
    protected $table='DiseasesTreatment';
    protected $fillable=['disease_id','treatment_id','created_by','updated_by'];
}

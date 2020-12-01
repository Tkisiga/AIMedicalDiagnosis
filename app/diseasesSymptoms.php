<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diseasesSymptoms extends Model
{
    protected $table='DiseasesSymptoms';
    protected $fillable=['disease_id','symptom_id','updated_by'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diseasesClinicFindings extends Model
{
    protected $table='DiseasesClinicFindings';
    protected $fillable=['disease_id','clinic_findings_id','created_by','updated_by'];
}

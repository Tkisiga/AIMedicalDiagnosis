<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicFindings extends Model
{
    protected $table = "ClinicFindings";
    protected $fillable = ['symptoms','created_by','updated_by'];
}

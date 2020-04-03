<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    protected $table = "patients";
    protected $fillable=['patients_id','sex','age','lab_results','updated_by',];
}

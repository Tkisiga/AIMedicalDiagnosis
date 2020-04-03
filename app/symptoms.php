<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class symptoms extends Model
{
    protected $table = "Symptoms";
    protected $fillable = ['symptom_id','name','updated_by'];
}

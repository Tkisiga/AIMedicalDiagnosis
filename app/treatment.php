<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class treatment extends Model
{
    protected $table='Treatment';
    protected $fillable=['treatment_id','name','created_by','updated_by'];
}

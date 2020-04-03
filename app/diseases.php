<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diseases extends Model
{
    protected $table = "Diseases";
    protected $fillable=['disease_id','name','updated_by',];
}

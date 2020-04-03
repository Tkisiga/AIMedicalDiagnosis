<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signs extends Model
{
    protected $table = "Signs";
    protected $fillable = ['sign_id','name','updated_by'];
}    

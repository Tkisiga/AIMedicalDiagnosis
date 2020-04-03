<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class management extends Model
{
    protected $table='Management';
    protected $fillable=['management_id','name','updated_by'];
}

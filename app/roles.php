<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $table='Roles';
    protected $fillable=['role_id','title','created_by','updated_by'];
}

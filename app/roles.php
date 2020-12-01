<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $table='Roles';
    protected $fillable=['role_ID','title','updated_by'];
}

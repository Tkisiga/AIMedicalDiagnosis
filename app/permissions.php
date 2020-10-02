<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permissions extends Model
{
    protected $table='Permissions';
    protected $fillable=['permissions','permission_id','created_by','updated_by'];
}

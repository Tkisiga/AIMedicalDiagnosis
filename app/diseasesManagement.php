<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diseasesManagement extends Model
{
    protected $table='DiseasesManagement';
    protected $fillable=['disease_id','management_id','updated_by'];
}

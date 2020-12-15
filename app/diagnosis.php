<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnosis extends Model
{
    protected $table = "diagnosis";
    protected $fillable = ['created_by','updated_by'];
}

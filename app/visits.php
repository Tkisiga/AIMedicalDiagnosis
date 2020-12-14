<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visits extends Model
{
    protected $table = "Visits";
    protected $fillable=['patient_name','visit_date','visit_category','next_visit','created_by','updated_by',];
}

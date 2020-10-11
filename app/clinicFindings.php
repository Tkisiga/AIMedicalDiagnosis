<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clinicFindings extends Model
{
    protected $table = "ClinicFindings";
    protected $fillable = ['patient_history_id','general_appearance_id',
    'physical_examination_id','created_by','updated_by'];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MedicalPractioners extends Migration
{
   
    public function up()
    {
        Schema::create('MedicalPractitioners', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email');
            $table->string('roleID');
            $table->string('phone_No');
            $table->string('updated_by');
            $table->timestamps();
        
        });
    }

   
    public function down()
    {
        Schema::dropIfExist('MedicalPractioners');
    }
}

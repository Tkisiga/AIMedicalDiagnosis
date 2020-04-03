<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Roles extends Migration
{
   
    public function up()
    {
        Schema::create('Roles', function (Blueprint $table){
            $table->id();
            $table->string('role_ID');
            $table->string('title');
            $table->string('updated_by');
            $table->timestamps();

        });

    }

    public function down()
    {
        Schema::dropIfExist('Roles');
    }
}

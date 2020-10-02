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
            $table->string('role_id');
            $table->string('title');
            $table->integer('updated_by')->nullable();
            $table->integer('created_by');
            $table->softdeletes('deleted_at');
            $table->timestamps();

        });

    }

    public function down()
    {
        Schema::dropIfExist('Roles');
    }
}

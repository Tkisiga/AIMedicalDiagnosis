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
            $table->string('title');
            $table->integer('updated_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->softdeletes('deleted_at');
            $table->timestamps();

        });

    }

    public function down()
    {
        Schema::dropIfExist('Roles');
    }
}

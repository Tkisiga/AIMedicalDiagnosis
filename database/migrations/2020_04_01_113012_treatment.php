<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Treatment extends Migration
{
    
    public function up()
    {
        Schema::create('Treatment',function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('updated_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->softdeletes('deleted_at');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('Treatment');
    }
}

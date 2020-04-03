<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('patients_id');
            $table->string('name')->nullable();
            $table->integer('age');
            $table->string('sex');
            $table->string('contact')->nullable();
            $table->string('medical_history')->nullable();
            $table->string('lab_results');
            $table->integer('updated_by');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}


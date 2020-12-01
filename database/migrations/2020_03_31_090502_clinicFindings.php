<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClinicFindings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ClinicFindings',function (Blueprint $table){
            $table->id();
            $table->string('Hands');
            $table->string('Skin');
            $table->string('Neck');
            $table->string('Head');
            $table->string('eyes');
            $table->string('Insulin_injection_sites');
            $table->string('Legs');
            $table->string('Feet');
            $table->string('Observations');
            $table->string('Symptoms');
            $table->integer('updated_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->softdeletes('deleted_at');
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
        Schema::dropIfExists('ClinicFindings');
    }
}

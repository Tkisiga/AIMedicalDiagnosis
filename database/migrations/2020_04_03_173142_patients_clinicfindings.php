<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PatientsClinicFindings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PatientsClinicFindings', function (Blueprint $table){
            $table->id();
            $table->string('patient_id');
            $table->string('clinic_findings_id');
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
        Schema::dropIfExists('PatientsClinicFindings');
    }
}

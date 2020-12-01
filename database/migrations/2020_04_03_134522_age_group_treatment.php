<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgeGroupTreatment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AgeGroupTreatment', function (Blueprint $table){
            $table->id();
            $table->string('ageGroup_id');
            $table->string('treatment_id');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('AgeGroupTreatment');
    }
}

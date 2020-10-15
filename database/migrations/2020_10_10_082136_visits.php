<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Visits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Visits', function (Blueprint $table){
            $table->id();
            $table->string('patient_id')->nullable();
            $table->string('visit_date');
            $table->string('visit_category');
            $table->string('next_visit');
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
        Schema::dropIfExists('Visits');
    }
}

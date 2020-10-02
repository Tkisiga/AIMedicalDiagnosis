<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiseasesManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DiseasesManagement', function (Blueprint $table){
            $table->id();
            $table->string('disease_id');
            $table->string('management_id');
            $table->integer('updated_by')->nullable();
            $table->integer('created_by');
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
        Schema::dropIfExists('DiseasesManagement');
    }
}

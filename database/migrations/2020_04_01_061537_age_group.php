<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgeGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AgeGroup', function (Blueprint $table){
            $table->id();
            $table->string('ageGroup_id');
            $table->integer('age');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExixts('AgeGroup');
    }
}

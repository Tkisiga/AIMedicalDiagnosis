<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permissions extends Migration
{
   
    public function up()
    {
        Schema::create ('Permissions', function (Blueprint $table){
            $table->id();
            $table->string('permissions');
            $table->string('permission_ID');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Permissions');
    }
}

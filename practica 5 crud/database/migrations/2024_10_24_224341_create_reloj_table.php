<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up()
    {
        Schema::create('reloj', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('material_correa');
            $table->integer('resistencia_agua');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reloj');
    }
};

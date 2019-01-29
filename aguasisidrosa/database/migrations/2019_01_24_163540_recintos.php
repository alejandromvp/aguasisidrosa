<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recintos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recintos', function (Blueprint $table) {
            $table->increments('recinto_id');
            $table->string('recinto_nombre');
            $table->string('recinto_orden');
            $table->unsignedInteger('localidad_id');
            $table->foreign('localidad_id')->references('localidad_id')->on('localidad');
            $table->unsignedInteger('tipo_recinto_id');
            $table->foreign('tipo_recinto_id')->references('tipo_recinto_id')->on('tipo_recinto');
            $table->unsignedInteger('arduino_id')->unique()->nullable();
            $table->foreign('arduino_id')->references('arduino_id')->on('arduino');
            $table->timestamps();
            $table->softDeletes();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

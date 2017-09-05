<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {

            $table->integer('id');
            $table->primary('id');
            $table->integer('escuela_id');
            $table->string('dni')->unique();
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('codigo_postal')->nullable();
            $table->string('pais'); //despues agregar tabla
            $table->string('horarios')->nullable();
            
            $table->timestamps();

            //$table->foreign('escuela_id')->references('id')->on('escuelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}

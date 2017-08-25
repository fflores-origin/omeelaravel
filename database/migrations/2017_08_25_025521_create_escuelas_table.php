<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tipoescuelas', function (Blueprint $table) {
            
            $table->integer('id');
            $table->string('description');

            $table->timestamps();
        });

        Schema::create('escuelas', function (Blueprint $table) {
            
            $table->integer('id');
            $table->string('razon_social');
            $table->string('nombre_escuela');
            $table->integer('tipo');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('codigopostal');
            $table->string('provincia');
            $table->integer('pais');
            $table->string('telefono');

            $table->timestamps();

            $table->foreign('id')->references('id')->on('tipoescuelas');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('escuelas', function (Blueprint $table) {

            $table->foreign('d')->references('id')->on('tipoescuelas');
        });

        Schema::dropIfExists('escuelas');
        Schema::dropIfExists('tipoescuelas');
    }
}

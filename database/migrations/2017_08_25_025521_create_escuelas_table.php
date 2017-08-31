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

        Schema::create('tipo_escuelas', function (Blueprint $table) {
            
            $table->integer('id');
            $table->primary('id');

            $table->string('description');

            $table->timestamps();
        });

        Schema::create('escuelas', function (Blueprint $table) {
            
            $table->integer('id');
            $table->primary('id');

            $table->string('razon_social');
            $table->string('nombre_escuela');
            $table->integer('tipo_escuela_id');
            // $table->string('nombre');
            // $table->string('apellido');
            $table->string('direccion');
            $table->string('codigo_postal');
            $table->string('provincia');
            $table->string('pais');
            $table->string('telefono');

            $table->timestamps();
            
            //$table->foreign('tipo_id')->references('id')->on('tipo_escuelas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_escuelas');

        Schema::dropIfExists('escuelas');
    }
}

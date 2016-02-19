<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Incidencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->integer('id_alerta');
            $table->string('tipo');
            $table->string('descripcion');
            $table->dateTime('fecha');
            $table->integer('id_contenedor');
            $table->integer('tipo_contenedor');
            $table->string('dir_contenedor');
            $table->double('lat_contenedor');
            $table->double('lon_contenedor');
            $table->string('email_usuario');
            $table->longText('imagen');
            $table->boolean('reparado');
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

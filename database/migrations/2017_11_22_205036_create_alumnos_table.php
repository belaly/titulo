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
            $table->increments('id');
            $table->string('name');
            $table->integer('edad');
            $table->string('fecha_nacimiento');
            $table->string('ano_ingreso');

            $table->integer('id_curso')->unsigned()->nullable();
            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');

            $table->integer('id_apoderado')->unsigned()->nullable();
            $table->foreign('id_apoderado')->references('id')->on('users');

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
        Schema::dropIfExists('alumnos');
    }
}

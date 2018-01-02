<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha');
            $table->string('bano');
            $table->string('colacion');
            $table->string('actividad');

            $table->integer('id_alumno')->unsigned()->nullable();
            $table->foreign('id_alumno')->references('id')->on('alumnos')->onDelete('cascade');


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
        Schema::dropIfExists('reportes');
    }
}

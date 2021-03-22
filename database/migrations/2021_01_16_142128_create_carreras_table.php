<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //Crear la tabla modalidades_carrera
       Schema::create('modalidades_carrera', function (Blueprint $table) {
        $table->id('id_modalidad_carrera');
        $table->string('descripcion_modalidad_carrera', 100)->unique();
    });

    //Crear la tabla tipos_carrera
    Schema::create('tipos_carrera', function (Blueprint $table) {
        $table->id('id_tipo_carrera');
        $table->string('descripcion_tipo_carrera', 100)->unique();
    });

    //Crear la tabla titulos_carrera
    Schema::create('titulos_carrera', function (Blueprint $table) {
        $table->id('id_titulo_carrera');
        $table->string('descripcion_titulo_carrera', 100)->unique();
    });

    //Crear la tabla jornadas
    Schema::create('jornadas_carrera', function (Blueprint $table) {
        $table->id('id_jornada_carrera');
        $table->string('descripcion_jornada_carrera', 100)->unique();
    });

    //Crear la tabla carreras
    Schema::create('carreras', function (Blueprint $table) {

        //Datos de las carreras del ISTMAS
        $table->id('id_carrera');
        $table->string('descripcion_carrera', 100);
        $table->string('logo_carrera', 100)->nullable();
        $table->string('duracion_carrera', 25);
        $table->string('malla_curricular_carrera', 100)->nullable();
        $table->string('mision_carrera', 950);
        $table->string('vision_carrera', 950);
        $table->string('perfil_egreso_carrera', 950);
        $table->string('campo_ocupacional_carrera', 950);

        $table->foreignId('modalidad_carrera_id')->references('id_modalidad_carrera')->on('modalidades_carrera')->onDelete('cascade');
        //Relación con la tabla de titulos_carrera
        $table->foreignId('titulo_carrera_id')->references('id_titulo_carrera')->on('titulos_carrera')->onDelete('cascade');
        //Relación con la tabla de tipos_carrera
        $table->foreignId('tipo_carrera_id')->references('id_tipo_carrera')->on('tipos_carrera')->onDelete('cascade');
        //Relación con la tabla de jornadas
        $table->foreignId('jornada_carrera_id')->references('id_jornada_carrera')->on('jornadas_carrera')->onDelete('cascade');
    });

    //Crear la tabla estudiantes_carreras
    Schema::create('estudiantes_carreras', function (Blueprint $table) {

        //Relaciones con las otras tablas de la Base de Datos
        $table->foreignId('estudiante_id')->unsigned()->references('id_estudiante')->on('estudiantes')->nullable()->onDelete('cascade');
        $table->foreignId('carrera_id')->unsigned()->references('id_carrera')->on('carreras')->nullable()->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalidades_carrera');
        Schema::dropIfExists('tipos_carrera');
        Schema::dropIfExists('titulos_carrera');
        Schema::dropIfExists('jornadas_carrera');
        Schema::dropIfExists('carreras');
        Schema::dropIfExists('estudiantes_carreras');
    }
}

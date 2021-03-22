<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('id_rol');
            $table->string('descripcion_rol', 100)->unique();
        });

        Schema::create('administrativos', function (Blueprint $table) {
            $table->id('id_administrativo');
            $table->string('nombres_administrativo', 255);
            $table->string('apellidos_administrativo', 255);
            $table->string('numero_identificacion_administrativo', 15);
            $table->date('fecha_nacimiento_administrativo');
            $table->string('email_administrativo')->unique();
            $table->string('celular_administrativo', 10);
            $table->string('convencional_administrativo', 10);
            $table->string('direccion_administrativo', 100);
            $table->string('password_administrativo');
            $table->string('imagen_perfil_administrativo')->nullable();
        });

        Schema::create('roles_administrativos', function (Blueprint $table) {

            $table->foreignId('rol_id')->unsigned()->references('id_rol')->on('roles')->nullable()->onDelete('cascade');
            $table->foreignId('administrativo_id')->unsigned()->references('id_administrativo')->on('administrativos')->nullable()->onDelete('cascade');
        });

        Schema::create('horas', function (Blueprint $table) {
            $table->id('id_hora');
            $table->string('descripcion_hora', 100)->unique();
        });

        Schema::create('dias', function (Blueprint $table) {
            $table->id('id_dia');
            $table->string('descripcion_dia', 100)->unique();
        });

        Schema::create('horarios', function (Blueprint $table) {

            $table->id('id_horario');
            $table->string('descripcion_horario', 100)->unique();

            $table->foreignId('hora_id')->unsigned()->references('id_hora')->on('horas')->nullable()->onDelete('cascade');
            $table->foreignId('dia_id')->unsigned()->references('id_dia')->on('dias')->nullable()->onDelete('cascade');
        });

        Schema::create('paralelos', function (Blueprint $table) {
            $table->id('id_paralelo');
            $table->string('descripcion_paralelo', 100)->unique();
        });

        Schema::create('ciclos_academicos', function (Blueprint $table) {
            $table->id('id_ciclo_academico');
            $table->string('descripcion_ciclo_academico', 100)->unique();
        });

        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id('id_asignatura');
            $table->string('descripcion_asignatura', 100)->unique();
            $table->integer('creditos_asignatura');

            //$table->foreignId('carrera_id')->unsigned()->references('id_carrera')->on('carreras')->nullable()->onDelete('cascade');
            //$table->foreignId('asignatura_id')->references('id_asignatura')->on('asignaturas')->onDelete('cascade');
        });

        //Creación de  la tabla "tipos_discapacidad_estudiante"
        /*Schema::create('asignaturas_carreras', function (Blueprint $table) {

            $table->foreignId('asignatura_id')->unsigned()->references('id_asignatura')->on('asignaturas')->nullable()->onDelete('cascade');
            $table->foreignId('carrera_id')->unsigned()->references('id_carrera')->on('carreras')->nullable()->onDelete('cascade');
        });*/

        Schema::create('cursos', function (Blueprint $table) {
            $table->id('id_curso');
            $table->string('descripcion_curso', 100);

            $table->foreignId('paralelo_id')->references('id_paralelo')->on('paralelos')->onDelete('cascade');
            $table->foreignId('ciclo_academico_id')->references('id_ciclo_academico')->on('ciclos_academicos')->onDelete('cascade');
            $table->foreignId('horario_id')->nullable()->references('id_horario')->on('horarios')->onDelete('cascade');
            $table->foreignId('administrativo_id')->nullable()->references('id_administrativo')->on('administrativos')->onDelete('cascade');
            //$table->foreignId('asignatura_id')->nullable()->references('id_asignatura')->on('asignaturas')->onDelete('cascade');
            //$table->foreignId('carrera_id')->unsigned()->references('id_carrera')->on('carreras')->nullable()->onDelete('cascade');
        });

        //Creación de  la tabla "tipos_discapacidad_estudiante"
        Schema::create('asignaturas_cursos_carreras', function (Blueprint $table) {
            $table->foreignId('carrera_id')->unsigned()->references('id_carrera')->on('carreras')->nullable()->onDelete('cascade');
            $table->foreignId('asignatura_id')->unsigned()->references('id_asignatura')->on('asignaturas')->nullable()->onDelete('cascade');
            $table->foreignId('curso_id')->unsigned()->references('id_curso')->on('cursos')->nullable()->onDelete('cascade');
        });

        Schema::create('evaluaciones_nutricional', function (Blueprint $table) {
            $table->id('id_evaluacion_nutricional');
            $table->string('descripcion_evaluacion_nutricional', 45);
        });

        Schema::create('historias_clinicas', function (Blueprint $table) {
            $table->id('id_historia_clinica');
            $table->date('fecha_historia')->nullable();
            $table->string('antecedentes_personales', 255)->nullable();
            $table->string('antecedentes_familiares', 255)->nullable();
            $table->string('enfermedad_actual', 255)->nullable();
            $table->integer('estudiante_fc');
            $table->string('estudiante_ta', 7);
            $table->integer('estudiante_fr');
            $table->double('estudiante_temperatura');
            $table->integer('estudiante_peso');
            $table->integer('estudiante_talla');
            $table->integer('estudiante_imc');
            $table->string('impresion_diagnostica', 255)->nullable();

            $table->foreignId('evaluacion_nutricional_id')->references('id_evaluacion_nutricional')->on('evaluaciones_nutricional')->onDelete('cascade');
            $table->foreignId('administrativo_id')->references('id_administrativo')->on('administrativos')->onDelete('cascade');
            $table->foreignId('estudiante_id')->references('id_estudiante')->on('estudiantes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('administrativos');
        Schema::dropIfExists('roles_administrativos');
        Schema::dropIfExists('horas');
        Schema::dropIfExists('dias');
        Schema::dropIfExists('horarios');
        Schema::dropIfExists('paralelos');
        Schema::dropIfExists('ciclos_academicos');
        Schema::dropIfExists('asignaturas');
        Schema::dropIfExists('cursos');
        Schema::dropIfExists('asignaturas_cursos_carreras');
        Schema::dropIfExists('evaluaciones_nutricional');
        Schema::dropIfExists('historias_clinicas');
    }
}

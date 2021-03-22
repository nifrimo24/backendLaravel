<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_documento', function (Blueprint $table) {
            $table->id('id_tipo_documento');
            $table->string('descripcion_documento', 150);
        });

        Schema::create('documentos_matricula', function (Blueprint $table) {
            $table->id('id_documento_matricula');
            $table->string('documento', 255)->nullable();
            $table->date('fecha_documento');

            $table->foreignId('tipo_documento_id')->references('id_tipo_documento')->on('tipos_documento')->onDelete('cascade');
        });

        Schema::create('estados_matricula', function (Blueprint $table) {
            $table->id('id_estado_matricula');
            $table->string('descripcion_estado_matricula', 45);
        });

        Schema::create('tipos_matricula', function (Blueprint $table) {
            $table->id('id_tipo_matricula');
            $table->string('descripcion_tipo_matricula', 45);
        });

        Schema::create('valoraciones_calificaciones', function (Blueprint $table) {
            $table->id('id_valoracion_calificacion');
            $table->string('descripcion_valoracion_calificacion', 45);
        });

        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id('id_calificacion');
            $table->integer('primer_aporte');           //A
            $table->integer('segundo_aporte');          //B
            $table->integer('gestion_aula');            //C=(A+B)/2
            $table->integer('evaluacion_final');        //D
            $table->integer('promedio');                //E=(C+D)/2
            $table->integer('supletorio');              //F
            $table->integer('nota_final');              //E o G=(C+D)/2
            $table->integer('porcentaje_asistencia');

            $table->foreignId('valoracion_calificacion_id')->references('id_valoracion_calificacion')->on('valoraciones_calificaciones')->onDelete('cascade');
        });

        Schema::create('periodos_academicos', function (Blueprint $table) {
            $table->id('id_periodo_academico');
            $table->string('descripcion_periodo_academico', 100)->unique();
        });

        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago');
            $table->string('descripcion_pago', 45);
        });

        Schema::create('pensiones', function (Blueprint $table) {
            $table->id('id_pension');
            $table->string('descripcion_pension', 45);
            $table->boolean('pension_habilitada');
            $table->date('fecha_vencimiento')->nullable();
        });

        Schema::create('matriculas', function (Blueprint $table) {
            $table->id('id_matricula');
            $table->date('fecha_matricula');
            $table->date('fecha_vencimiento')->nullable();
            $table->integer('costo_matricula')->nullable();
            $table->integer('valor_cancelado')->nullable();
            $table->integer('valor_pendiente')->nullable();
            $table->string('carta_compromiso')->nullable();

            $table->foreignId('tipo_matricula_id')->references('id_tipo_matricula')->on('tipos_matricula')->onDelete('cascade');
            $table->foreignId('estado_matricula_id')->references('id_estado_matricula')->on('estados_matricula')->onDelete('cascade');
            $table->foreignId('periodo_academico_id')->references('id_periodo_academico')->on('periodos_academicos')->onDelete('cascade');
            $table->foreignId('documento_matricula_id')->nullable()->references('id_documento_matricula')->on('documentos_matricula')->onDelete('cascade');
            $table->foreignId('calificacion_id')->nullable()->references('id_calificacion')->on('calificaciones')->onDelete('cascade');
            $table->foreignId('curso_id')->references('id_curso')->on('cursos')->onDelete('cascade');
        });

        Schema::create('pagos_matriculas', function (Blueprint $table) {

            $table->string('comprobante_pago');
            $table->integer('cantidad_pago');
            $table->date('fecha_pago_matricula')->nullable();
            $table->foreignId('matricula_id')->unsigned()->references('id_matricula')->on('matriculas')->nullable()->onDelete('cascade');
            $table->foreignId('pago_id')->unsigned()->references('id_pago')->on('pagos')->nullable()->onDelete('cascade');
        });

        Schema::create('pensiones_matriculas', function (Blueprint $table) {

            $table->string('comprobante_pension');
            $table->string('estado_pension');
            $table->integer('cantidad_pension');
            $table->date('fecha_pago_matricula');
            $table->foreignId('matricula_id')->unsigned()->references('id_matricula')->on('matriculas')->nullable()->onDelete('cascade');
            $table->foreignId('pension_id')->unsigned()->references('id_pension')->on('pensiones')->nullable()->onDelete('cascade');
        });

        //Crear la tabla estudiantes_carreras
        Schema::create('estudiantes_matriculas', function (Blueprint $table) {

            //Relaciones con las otras tablas de la Base de Datos
            $table->foreignId('estudiante_id')->unsigned()->references('id_estudiante')->on('estudiantes')->nullable()->onDelete('cascade');
            $table->foreignId('matricula_id')->unsigned()->references('id_matricula')->on('matriculas')->nullable()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_documento');
        Schema::dropIfExists('documentos_matricula');
        Schema::dropIfExists('estados_matricula');
        Schema::dropIfExists('tipos_matricula');
        Schema::dropIfExists('valoraciones_calificaciones');
        Schema::dropIfExists('calificaciones');
        Schema::dropIfExists('periodos_academicos');
        Schema::dropIfExists('pagos');
        Schema::dropIfExists('matriculas');
        Schema::dropIfExists('pagos_matriculas');
        Schema::dropIfExists('estudiantes_matriculas');
    }
}

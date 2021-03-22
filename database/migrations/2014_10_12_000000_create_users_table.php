<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crear la tabla tipos_identificacion
        Schema::create('tipos_identificacion', function (Blueprint $table) {
            $table->id('id_identificacion');
            $table->string('descripcion_tipo_identificacion', 100)->unique();
        });

        //Crear la tabla sexos
        Schema::create('sexos', function (Blueprint $table) {
            $table->id('id_sexo');
            $table->string('descripcion_sexo', 100)->unique();
        });

        //Crear la tabla generos
        Schema::create('generos', function (Blueprint $table) {
            $table->id('id_genero');
            $table->string('descripcion_genero', 100)->unique();
        });

        //Crear la tabla contactos_emergencia
        Schema::create('contactos_emergencia', function (Blueprint $table) {
            $table->id('id_contacto');
            $table->string('nombres_apellidos_contacto', 255);
            $table->string('parentesco_contacto', 25);
            $table->string('numero_celular_contacto', 10);
        });

        //Crear la tabla etnias
        Schema::create('etnias', function (Blueprint $table) {
            $table->id('id_etnia');
            $table->string('descripcion_etnia', 100)->unique();
        });

        //Crear la tabla tipos_sangre
        Schema::create('tipos_sangre', function (Blueprint $table) {
            $table->id('id_tipo_sangre');
            $table->string('descripcion_tipo_sangre', 100)->unique();
        });

        //Crear la tabla categorias_migratorias
        Schema::create('categorias_migratorias', function (Blueprint $table) {
            $table->id('id_categoria_migratoria');
            $table->string('descripcion_categorias_migratoria', 100)->unique();
        });

        //Crear la tabla tipos_discapacidad
        Schema::create('tipos_discapacidad', function (Blueprint $table) {
            $table->id('id_tipo_discapacidad');
            $table->string('descripcion_tipo_discapacidad', 100)->unique();
        });

        //Crear la tabla titulos_academicos
        Schema::create('titulos_academicos', function (Blueprint $table) {
            $table->id('id_titulo_academico');
            $table->string('descripcion_titulo_academico', 100);
        });

        //Crear la tabla estados_civiles
        Schema::create('estados_civiles', function (Blueprint $table) {
            $table->id('id_estado_civil');
            $table->string('descripcion_estado_civil', 100)->unique();
        });

        //Crear la tabla ocupaciones_estudiantes
        Schema::create('ocupaciones_estudiantes', function (Blueprint $table) {
            $table->id('id_ocupacion_estudiante');
            $table->string('descripcion_ocupacion_estudiante', 100)->unique();
        });

        //Crear la tabla ocupaciones_ingresos_estudiantes
        Schema::create('ocupaciones_ingresos_estudiantes', function (Blueprint $table) {
            $table->id('id_ocupacion_ingresos_estudiante');
            $table->string('descripcion_ocupacion_ingresos', 100);
        });

        //Crear la tabla niveles_formacion
        Schema::create('niveles_formacion', function (Blueprint $table) {
            $table->id('id_nivel_formacion');
            $table->string('descripcion_nivel_formacion', 100)->unique();
        });

        //Crear la tabla tipos_institituciones
        Schema::create('tipos_institituciones', function (Blueprint $table) {
            $table->id('id_tipo_institucion');
            $table->string('descripcion_tipo_institucion', 100)->unique();
        });

        //Crear la tabla sectores_instituciones
        Schema::create('sectores_instituciones', function (Blueprint $table) {
            $table->id('id_sector_institucion');
            $table->string('descripcion_sector_institucion', 100)->unique();
        });

        //Crear la tabla tipos_alcance
        Schema::create('tipos_alcance', function (Blueprint $table) {
            $table->id('id_alcance_proyecto_vinculacion');
            $table->string('descripcion_tipo_alcance', 100)->unique();
        });

        //Crear la tabla instituciones
        Schema::create('instituciones', function (Blueprint $table) {
            $table->id('id_institucion');
            $table->foreignId('tipo_institucion_id')->nullable()->references('id_tipo_institucion')->on('tipos_institituciones')->onDelete('cascade');
            $table->foreignId('sector_institucion_id')->nullable()->references('id_sector_institucion')->on('sectores_instituciones')->onDelete('cascade');
            $table->string('descripcion_institucion', 100)->unique();
        });

        //Crear la tabla creditos_educativos
        Schema::create('creditos_educativos', function (Blueprint $table) {
            $table->id('id_credito_educativo');
            $table->string('descripcion_credito_educativo', 100)->unique();
        });

        //Crear la tabla paises
        Schema::create('paises', function (Blueprint $table) {
            $table->id('id_pais');
            $table->string('nombre_pais', 100)->unique();
        });

        //Crear la tabla provincias
        Schema::create('provincias', function (Blueprint $table) {
            $table->id('id_provincia');
            $table->string('nombre_provincia', 100)->unique();

            $table->foreignId('pais_id')->nullable()->references('id_pais')->on('paises')->onDelete('cascade');
        });

        //Crear la tabla cantones
        Schema::create('cantones', function (Blueprint $table) {
            $table->id('id_canton');
            $table->string('nombre_canton', 100)->unique();

            $table->foreignId('provincia_id')->nullable()->references('id_provincia')->on('provincias')->onDelete('cascade');
        });

        //Crear la tabla tipos_colegio
        Schema::create('tipos_colegio', function (Blueprint $table) {
            $table->id('id_tipo_colegio');
            $table->string('descripcion_tipo_colegio', 100)->unique();
        });

        //Crear la tabla tipos_colegio
        Schema::create('colegios', function (Blueprint $table) {
            $table->id('id_colegio');
            $table->string('descripcion_colegio', 100);

            $table->foreignId('tipo_colegio_id')->nullable()->references('id_tipo_colegio')->on('tipos_colegio')->onDelete('cascade');
        });

        //Crear la tabla tipos_bachillerato
        Schema::create('tipos_bachillerato', function (Blueprint $table) {
            $table->id('id_tipo_bachillerato');
            $table->string('descripcion_tipo_bachillerato', 100)->unique();
        });

        //Creación de  la tabla "colegios_tipos_bachillerato"
        Schema::create('colegios_tipos_bachillerato', function (Blueprint $table) {

            $table->foreignId('tipo_bachillerato_id')->unsigned()->references('id_tipo_bachillerato')->on('tipos_bachillerato')->nullable()->onDelete('cascade');
            $table->foreignId('colegio_id')->unsigned()->references('id_colegio')->on('colegios')->nullable()->onDelete('cascade');
        });

        //Creación de la tabla "estudiantes"
        Schema::create('estudiantes', function (Blueprint $table) {

            //Datos Informativos del Estudiante ISTMAS
            $table->id('id_estudiante');
            $table->string('nombres_estudiante', 255);
            $table->string('apellidos_estudiante', 255);
            $table->string('numero_identificacion_estudiante', 15);
            $table->date('fecha_nacimiento_estudiante');
            $table->string('email_estudiante')->unique();
            $table->string('celular_estudiante', 10);
            $table->string('convencional_estudiante', 10);
            $table->string('direccion_estudiante', 100);
            $table->string('password_estudiante');

            //Datos Complementarios del Estudiante ISTMAS
            $table->string('codigo_postal_estudiante', 10)->nullable();
            $table->string('imagen_perfil_estudiante')->nullable();
            $table->boolean('idioma_ancestral')->nullable();
            $table->string('descripcion_idioma_ancestral')->nullable();
            $table->integer('edad')->nullable();
            $table->boolean('discapacidad')->nullable();
            $table->string('numero_carnet_conadis', 15)->nullable();
            $table->integer('porcentaje_discapacidad')->nullable();
            $table->integer('anio_graduacion')->nullable();
            //$table->boolean('educacion_superior')->nullable();
            $table->date('fecha_inicio_carrera')->nullable();
            $table->boolean('materia_reprobada')->nullable();
            $table->boolean('gratuidad')->nullable();
            $table->boolean('practicas_preprofesionales')->nullable();
            $table->integer('numero_horas_practicas')->nullable();
            $table->boolean('proyecto_vinculacion')->nullable();
            $table->boolean('bono_desarrollo_humano')->nullable();
            $table->integer('cantidad_ingresos_hogar')->nullable();
            $table->integer('miembros_hogar')->nullable();
           // $table->boolean('firma_acuerdo')->nullable();

            //Relaciones con las otras tablas de la Base de Datos
            $table->foreignId('tipo_identificacion_id')->nullable()->references('id_identificacion')->on('tipos_identificacion')->onDelete('cascade');
            $table->foreignId('sexo_id')->nullable()->references('id_sexo')->on('sexos')->onDelete('cascade');
            $table->foreignId('genero_id')->nullable()->references('id_genero')->on('generos')->onDelete('cascade');
            $table->foreignId('contacto_emergencia_id')->nullable()->references('id_contacto')->on('contactos_emergencia')->onDelete('cascade');
            $table->foreignId('etnia_id')->nullable()->references('id_etnia')->on('etnias')->onDelete('cascade');
            $table->foreignId('canton_origen_id')->nullable()->references('id_canton')->on('cantones')->onDelete('cascade');
            $table->foreignId('canton_residencia_id')->nullable()->references('id_canton')->on('cantones')->onDelete('cascade');
            $table->foreignId('categoria_migratoria_id')->nullable()->references('id_categoria_migratoria')->on('categorias_migratorias')->onDelete('cascade');
            $table->foreignId('estado_civil_id')->nullable()->references('id_estado_civil')->on('estados_civiles')->onDelete('cascade');
            $table->foreignId('titulo_academico_id')->nullable()->references('id_titulo_academico')->on('titulos_academicos')->onDelete('cascade');
            $table->foreignId('tipo_sangre_id')->nullable()->references('id_tipo_sangre')->on('tipos_sangre')->onDelete('cascade');
            $table->foreignId('alcance_proyecto_vinculacion_id')->nullable()->references('id_alcance_proyecto_vinculacion')->on('tipos_alcance')->nullable()->onDelete('cascade');
            $table->foreignId('ocupacion_estudiante_id')->nullable()->references('id_ocupacion_estudiante')->on('ocupaciones_estudiantes')->onDelete('cascade');
            $table->foreignId('ocupacion_ingresos_estudiante_id')->nullable()->references('id_ocupacion_ingresos_estudiante')->on('ocupaciones_ingresos_estudiantes')->onDelete('cascade');
            $table->foreignId('nivel_formacion_estudiante_id')->nullable()->references('id_nivel_formacion')->on('niveles_formacion')->onDelete('cascade');
            $table->foreignId('nivel_formacion_padre_id')->nullable()->references('id_nivel_formacion')->on('niveles_formacion')->onDelete('cascade');
            $table->foreignId('nivel_formacion_madre_id')->nullable()->references('id_nivel_formacion')->on('niveles_formacion')->onDelete('cascade');
            $table->foreignId('tipo_bachillerato_id')->nullable()->references('id_tipo_bachillerato')->on('tipos_bachillerato')->onDelete('cascade');
            $table->foreignId('credito_educativo_id')->nullable()->references('id_credito_educativo')->on('creditos_educativos')->onDelete('cascade');
        });

        //Creación de  la tabla "tipos_discapacidad_estudiante"
        Schema::create('estudiante_tipos_discapacidad', function (Blueprint $table) {

            $table->foreignId('estudiante_id')->unsigned()->references('id_estudiante')->on('estudiantes')->nullable()->onDelete('cascade');
            $table->foreignId('tipo_discapacidad_id')->unsigned()->references('id_tipo_discapacidad')->on('tipos_discapacidad')->nullable()->onDelete('cascade');
        });

        //Creación de  la tabla "estudiante_institucion"
        Schema::create('estudiante_institucion', function (Blueprint $table) {

            $table->foreignId('estudiante_id')->unsigned()->references('id_estudiante')->on('estudiantes')->nullable()->onDelete('cascade');
            $table->foreignId('institucion_id')->unsigned()->references('id_institucion')->on('instituciones')->nullable()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_identificacion');
        Schema::dropIfExists('sexos');
        Schema::dropIfExists('generos');
        Schema::dropIfExists('contactos_emergencia');
        Schema::dropIfExists('etnias');
        Schema::dropIfExists('tipos_sangre');
        Schema::dropIfExists('categorias_migratorias');
        Schema::dropIfExists('tipos_discapacidad');
        Schema::dropIfExists('titulos_academicos');
        Schema::dropIfExists('estados_civiles');
        Schema::dropIfExists('ocupaciones_estudiantes');
        Schema::dropIfExists('ocupaciones_ingresos_estudiantes');
        Schema::dropIfExists('niveles_formacion');
        Schema::dropIfExists('tipos_institituciones');
        Schema::dropIfExists('sectores_instituciones');
        Schema::dropIfExists('tipos_alcance');
        Schema::dropIfExists('instituciones');
        Schema::dropIfExists('creditos_educativos');
        Schema::dropIfExists('paises');
        Schema::dropIfExists('provincias');
        Schema::dropIfExists('cantones');
        Schema::dropIfExists('tipos_colegio');
        Schema::dropIfExists('colegios');
        Schema::dropIfExists('tipos_bachillerato');
        Schema::dropIfExists('colegios_tipos_bachillerato');
        Schema::dropIfExists('estudiantes');
        Schema::dropIfExists('estudiante_tipos_discapacidad');
        Schema::dropIfExists('estudiante_institucion');
    }
}

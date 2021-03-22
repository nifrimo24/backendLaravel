<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturaCursoCarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /****** PRIMER CICLO  - PRESENCIAL ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 1,
            'carrera_id' => 1,
            'asignatura_id' => 2,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 1,
            'carrera_id' => 1,
            'asignatura_id' => 3,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 1,
            'carrera_id' => 1,
            'asignatura_id' => 4,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 1,
            'carrera_id' => 1,
            'asignatura_id' => 5,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 1,
            'carrera_id' => 1,
            'asignatura_id' => 6,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 1,
            'carrera_id' => 1,
            'asignatura_id' => 7,
        ]);

        /****** PRIMER CICLO  - SEMI PRESENCIAL ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 2,
            'carrera_id' => 2,
            'asignatura_id' => 1,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 2,
            'carrera_id' => 2,
            'asignatura_id' => 2,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 2,
            'carrera_id' => 2,
            'asignatura_id' => 3,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 2,
            'carrera_id' => 2,
            'asignatura_id' => 4,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 2,
            'carrera_id' => 2,
            'asignatura_id' => 5,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 2,
            'carrera_id' => 2,
            'asignatura_id' => 6,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 2,
            'carrera_id' => 2,
            'asignatura_id' => 7,
        ]);

        /****** PRIMER CICLO  - SEMI PRESENCIAL - masajes ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 3,
            'asignatura_id' => 1,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 3,
            'asignatura_id' => 2,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 3,
            'asignatura_id' => 3,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 3,
            'asignatura_id' => 4,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 3,
            'asignatura_id' => 5,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 3,
            'asignatura_id' => 6,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 3,
            'asignatura_id' => 7,
        ]);

        /****** SEGUNDO CICLO  - SEMI PRESENCIAL - clinicas ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 4,
            'carrera_id' => 2,
            'asignatura_id' => 8,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 4,
            'carrera_id' => 2,
            'asignatura_id' => 9,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 4,
            'carrera_id' => 2,
            'asignatura_id' => 10,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 4,
            'carrera_id' => 2,
            'asignatura_id' => 11,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 4,
            'carrera_id' => 2,
            'asignatura_id' => 12,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 4,
            'carrera_id' => 2,
            'asignatura_id' => 13,
        ]);

        /****** SEGUNDO CICLO  - SEMI PRESENCIAL - MASAJES ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 5,
            'asignatura_id' => 8,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 5,
            'asignatura_id' => 9,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 5,
            'asignatura_id' => 10,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 5,
            'asignatura_id' => 11,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 5,
            'asignatura_id' => 12,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 5,
            'asignatura_id' => 13,
        ]);

        /****** TERCER CICLO  - PRESENCIAL ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 6,
            'carrera_id' => 1,
            'asignatura_id' => 18,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 6,
            'carrera_id' => 1,
            'asignatura_id' => 17,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 6,
            'carrera_id' => 1,
            'asignatura_id' => 15,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 6,
            'carrera_id' => 1,
            'asignatura_id' => 16,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 6,
            'carrera_id' => 1,
            'asignatura_id' => 14,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 6,
            'carrera_id' => 1,
            'asignatura_id' => 19,
        ]);

        /****** TERCER CICLO  - SEMI PRESENCIAL - clinicas ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 7,
            'carrera_id' => 2,
            'asignatura_id' => 14,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 7,
            'carrera_id' => 2,
            'asignatura_id' => 15,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 7,
            'carrera_id' => 2,
            'asignatura_id' => 16,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 7,
            'carrera_id' => 2,
            'asignatura_id' => 17,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 7,
            'carrera_id' => 2,
            'asignatura_id' => 18,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 7,
            'carrera_id' => 2,
            'asignatura_id' => 19,
        ]);

        /****** TERCER CICLO  - SEMI PRESENCIAL - masajes ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 8,
            'asignatura_id' => 14,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 8,
            'asignatura_id' => 15,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 8,
            'asignatura_id' => 16,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 8,
            'asignatura_id' => 17,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 8,
            'asignatura_id' => 18,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 8,
            'asignatura_id' => 19,
        ]);

        /****** CUARTO CICLO  - SEMI PRESENCIAL - clinicas ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 9,
            'carrera_id' => 2,
            'asignatura_id' => 20,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 9,
            'carrera_id' => 2,
            'asignatura_id' => 21,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 9,
            'carrera_id' => 2,
            'asignatura_id' => 22,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 9,
            'carrera_id' => 2,
            'asignatura_id' => 23,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 9,
            'carrera_id' => 2,
            'asignatura_id' => 24,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 9,
            'carrera_id' => 2,
            'asignatura_id' => 25,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 9,
            'carrera_id' => 2,
            'asignatura_id' => 26,
        ]);

        /****** CUARTO CICLO  - SEMI PRESENCIAL - masajes ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 10,
            'asignatura_id' => 20,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 10,
            'asignatura_id' => 21,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 10,
            'asignatura_id' => 22,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 10,
            'asignatura_id' => 23,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 10,
            'asignatura_id' => 24,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 10,
            'asignatura_id' => 25,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 10,
            'asignatura_id' => 26,
        ]);

        /****** QUINTO CICLO  - PRESENCIAL ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 11,
            'carrera_id' => 1,
            'asignatura_id' => 27,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 11,
            'carrera_id' => 1,
            'asignatura_id' => 33,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 11,
            'carrera_id' => 1,
            'asignatura_id' => 29,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 11,
            'carrera_id' => 1,
            'asignatura_id' => 36,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 11,
            'carrera_id' => 1,
            'asignatura_id' => 32,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 11,
            'carrera_id' => 1,
            'asignatura_id' => 37,
        ]);

        /****** QUINTO CICLO  - SEMI PRESENCIAL - clinicas ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 12,
            'carrera_id' => 2,
            'asignatura_id' => 27,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 12,
            'carrera_id' => 2,
            'asignatura_id' => 28,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 12,
            'carrera_id' => 2,
            'asignatura_id' => 29,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 12,
            'carrera_id' => 2,
            'asignatura_id' => 30,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 12,
            'carrera_id' => 2,
            'asignatura_id' => 31,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 12,
            'carrera_id' => 2,
            'asignatura_id' => 32,
        ]);

        /****** QUINTO CICLO  - SEMI PRESENCIAL - clinicas ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 13,
            'carrera_id' => 2,
            'asignatura_id' => 27,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 13,
            'carrera_id' => 2,
            'asignatura_id' => 28,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 13,
            'carrera_id' => 2,
            'asignatura_id' => 29,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 13,
            'carrera_id' => 2,
            'asignatura_id' => 30,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 13,
            'carrera_id' => 2,
            'asignatura_id' => 31,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'curso_id' => 13,
            'carrera_id' => 2,
            'asignatura_id' => 32,
        ]);

        /****** QUINTO CICLO  - SEMI PRESENCIAL - masajes ******/
        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 14,
            'asignatura_id' => 27,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 14,
            'asignatura_id' => 33,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 14,
            'asignatura_id' => 29,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 14,
            'asignatura_id' => 34,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 14,
            'asignatura_id' => 35,
        ]);

        DB::table('asignaturas_cursos_carreras')->insert([
            'carrera_id' => 3,
            'curso_id' => 14,
            'asignatura_id' => 32,
        ]);
    }
}

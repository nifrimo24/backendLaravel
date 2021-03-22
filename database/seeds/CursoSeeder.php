<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 1,
            'descripcion_curso' => '1ro Presencial',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 1,
            'descripcion_curso' => '1ro Semipresencial - Clínicas',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 1,
            'descripcion_curso' => '1ro Semipresencial - Masajes',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 2,
            'descripcion_curso' => '2do Semipresencial - Clínicas',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 2,
            'descripcion_curso' => '2do Semipresencial - Masajes',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 3,
            'descripcion_curso' => '3ro Presencial',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 3,
            'descripcion_curso' => '3ro Semipresencial - Clínicas',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 3,
            'descripcion_curso' => '3ro Semipresencial - Masajes',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 4,
            'descripcion_curso' => '4to Semipresencial - Clínicas',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 4,
            'descripcion_curso' => '4to Semipresencial - Masajes',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 5,
            'descripcion_curso' => '5to Presencial',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 5,
            'descripcion_curso' => '5to Semipresencial - Clínicas(A)',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 2,
            'ciclo_academico_id' => 5,
            'descripcion_curso' => '5to Semipresencial - Clínicas(B)',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 5,
            'descripcion_curso' => '5to Semipresencial - Masajes',
        ]);

        /* DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 6,
            'descripcion_curso' => 'Semipresencial - Clínicas',
        ]);

        DB::table('cursos')->insert([
            'paralelo_id' => 1,
            'ciclo_academico_id' => 6,
            'descripcion_curso' => 'Semipresencial - Masajes',
        ]);*/
    }
}

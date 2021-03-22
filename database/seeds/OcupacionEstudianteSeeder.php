<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OcupacionEstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ocupaciones_estudiantes')->insert([
            'descripcion_ocupacion_estudiante' => 'Solamente Estudio'
        ]);

        DB::table('ocupaciones_estudiantes')->insert([
            'descripcion_ocupacion_estudiante' => 'Trabajo y Estudio'
        ]);
    }
}

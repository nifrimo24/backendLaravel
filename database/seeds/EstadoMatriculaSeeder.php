<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoMatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados_matricula')->insert([
            'descripcion_estado_matricula' => 'Matrícula Solicitada'
        ]);

        DB::table('estados_matricula')->insert([
            'descripcion_estado_matricula' => 'Matrícula Aprobada'
        ]);

        DB::table('estados_matricula')->insert([
            'descripcion_estado_matricula' => 'Matrícula Rechazada'
        ]);
    }
}

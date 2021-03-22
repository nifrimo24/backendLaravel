<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoMatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_matricula')->insert([
            'descripcion_tipo_matricula' => 'Ordinaria'
        ]);

        DB::table('tipos_matricula')->insert([
            'descripcion_tipo_matricula' => 'Extraordinaria'
        ]);

        DB::table('tipos_matricula')->insert([
            'descripcion_tipo_matricula' => 'Especial'
        ]);
    }
}

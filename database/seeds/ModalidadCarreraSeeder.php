<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalidadCarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modalidades_carrera')->insert([
            'descripcion_modalidad_carrera' => 'Presencial'
        ]);

        DB::table('modalidades_carrera')->insert([
            'descripcion_modalidad_carrera' => 'Semipresencial'
        ]);

        DB::table('modalidades_carrera')->insert([
            'descripcion_modalidad_carrera' => 'Virtual'
        ]);

        DB::table('modalidades_carrera')->insert([
            'descripcion_modalidad_carrera' => 'Dual'
        ]);
    }
}

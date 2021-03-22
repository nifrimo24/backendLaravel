<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoCarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_carrera')->insert([
            'descripcion_tipo_carrera' => 'Tecnología'
        ]);

        DB::table('tipos_carrera')->insert([
            'descripcion_tipo_carrera' => 'Tecnicatura'
        ]);
    }
}

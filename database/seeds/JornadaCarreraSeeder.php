<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JornadaCarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jornadas_carrera')->insert([
            'descripcion_jornada_carrera' => 'Matutina'
        ]);

        DB::table('jornadas_carrera')->insert([
            'descripcion_jornada_carrera' => 'Vespertina'
        ]);

        DB::table('jornadas_carrera')->insert([
            'descripcion_jornada_carrera' => 'Nocturna'
        ]);

        DB::table('jornadas_carrera')->insert([
            'descripcion_jornada_carrera' => 'Intensiva'
        ]);
    }
}

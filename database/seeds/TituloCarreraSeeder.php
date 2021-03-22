<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TituloCarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titulos_carrera')->insert([
            'descripcion_titulo_carrera' => 'Tecnólogo en Naturopatía'
        ]);

        DB::table('titulos_carrera')->insert([
            'descripcion_titulo_carrera' => 'Tecnólogo en Naturopatía en Clínica y Cuidado del Paciente'
        ]);

        DB::table('titulos_carrera')->insert([
            'descripcion_titulo_carrera' => 'Tecnólogo en Naturopatía Masajes Terapéuticos'
        ]);

        DB::table('titulos_carrera')->insert([
            'descripcion_titulo_carrera' => 'Tecnólogo en Desarrollo de Software'
        ]);
    }
}

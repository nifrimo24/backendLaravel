<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoBachilleratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_bachillerato')->insert([
            'descripcion_tipo_bachillerato' => 'Físico-Matemático'
        ]);

        DB::table('tipos_bachillerato')->insert([
            'descripcion_tipo_bachillerato' => 'Químico-Biólogo'
        ]);

        DB::table('tipos_bachillerato')->insert([
            'descripcion_tipo_bachillerato' => 'Sociales'
        ]);

        DB::table('tipos_bachillerato')->insert([
            'descripcion_tipo_bachillerato' => 'Ciencias'
        ]);

        DB::table('tipos_bachillerato')->insert([
            'descripcion_tipo_bachillerato' => 'Técnico'
        ]);

        DB::table('tipos_bachillerato')->insert([
            'descripcion_tipo_bachillerato' => 'Técnico Productivo'
        ]);

        DB::table('tipos_bachillerato')->insert([
            'descripcion_tipo_bachillerato' => 'BGU'
        ]);

        DB::table('tipos_bachillerato')->insert([
            'descripcion_tipo_bachillerato' => 'BI'
        ]);

        DB::table('tipos_bachillerato')->insert([
            'descripcion_tipo_bachillerato' => 'Otro'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSangreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_sangre')->insert([
            'descripcion_tipo_sangre' => 'A Positivo'
        ]);

        DB::table('tipos_sangre')->insert([
            'descripcion_tipo_sangre' => 'A Negativo'
        ]);

        DB::table('tipos_sangre')->insert([
            'descripcion_tipo_sangre' => 'B Positivo'
        ]);

        DB::table('tipos_sangre')->insert([
            'descripcion_tipo_sangre' => 'B Negativo'
        ]);

        DB::table('tipos_sangre')->insert([
            'descripcion_tipo_sangre' => 'AB Positivo'
        ]);

        DB::table('tipos_sangre')->insert([
            'descripcion_tipo_sangre' => 'AB Negativo'
        ]);

        DB::table('tipos_sangre')->insert([
            'descripcion_tipo_sangre' => 'O Positivo'
        ]);

        DB::table('tipos_sangre')->insert([
            'descripcion_tipo_sangre' => 'O Negativo'
        ]);
    }
}

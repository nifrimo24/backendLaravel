<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etnias')->insert([
            'descripcion_etnia' => 'Indígena'
        ]);

        DB::table('etnias')->insert([
            'descripcion_etnia' => 'Afroecuatoriano'
        ]);

        DB::table('etnias')->insert([
            'descripcion_etnia' => 'Negro'
        ]);

        DB::table('etnias')->insert([
            'descripcion_etnia' => 'Mulato'
        ]);

        DB::table('etnias')->insert([
            'descripcion_etnia' => 'Montuvio'
        ]);

        DB::table('etnias')->insert([
            'descripcion_etnia' => 'Mestizo'
        ]);

        DB::table('etnias')->insert([
            'descripcion_etnia' => 'Blanco'
        ]);

        DB::table('etnias')->insert([
            'descripcion_etnia' => 'Otro'
        ]);
    }
}

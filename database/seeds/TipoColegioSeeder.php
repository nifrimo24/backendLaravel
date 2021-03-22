<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoColegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_colegio')->insert([
            'descripcion_tipo_colegio' => 'Fiscal'
        ]);

        DB::table('tipos_colegio')->insert([
            'descripcion_tipo_colegio' => 'Fiscomisional'
        ]);

        DB::table('tipos_colegio')->insert([
            'descripcion_tipo_colegio' => 'Particular'
        ]);

        DB::table('tipos_colegio')->insert([
            'descripcion_tipo_colegio' => 'Municipal'
        ]);

        DB::table('tipos_colegio')->insert([
            'descripcion_tipo_colegio' => 'Extranjero'
        ]);

        DB::table('tipos_colegio')->insert([
            'descripcion_tipo_colegio' => 'No Registra'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_documento')->insert([
            'descripcion_documento' => 'Cédula de Identidad'
        ]);

        DB::table('tipos_documento')->insert([
            'descripcion_documento' => 'Pasaporte'
        ]);
    }
}

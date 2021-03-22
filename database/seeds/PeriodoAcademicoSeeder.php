<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodoAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodos_academicos')->insert([
            'descripcion_periodo_academico' => 'Febrero 2021 - Julio 2021'
        ]);
    }
}

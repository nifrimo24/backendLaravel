<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CicloAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('ciclos_academicos')->insert([
            'descripcion_ciclo_academico' => 'Primer Ciclo'
        ]);

        DB::table('ciclos_academicos')->insert([
            'descripcion_ciclo_academico' => 'Segundo Ciclo'
        ]);

        DB::table('ciclos_academicos')->insert([
            'descripcion_ciclo_academico' => 'Tercer Ciclo'
        ]);

        DB::table('ciclos_academicos')->insert([
            'descripcion_ciclo_academico' => 'Cuarto Ciclo'
        ]);

        DB::table('ciclos_academicos')->insert([
            'descripcion_ciclo_academico' => 'Quinto Ciclo'
        ]);

        DB::table('ciclos_academicos')->insert([
            'descripcion_ciclo_academico' => 'Sexto Ciclo'
        ]);
    }
}

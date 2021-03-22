<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelFormacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveles_formacion')->insert([
            'descripcion_nivel_formacion' => 'Bachillerato'
        ]);

        DB::table('niveles_formacion')->insert([
            'descripcion_nivel_formacion' => 'Superior no universitario'
        ]);

        DB::table('niveles_formacion')->insert([
            'descripcion_nivel_formacion' => 'Superior universitario'
        ]);

        DB::table('niveles_formacion')->insert([
            'descripcion_nivel_formacion' => 'Post Grado'
        ]);
    }
}

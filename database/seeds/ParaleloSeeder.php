<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParaleloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paralelos')->insert([
            'descripcion_paralelo' => 'A'
        ]);

        DB::table('paralelos')->insert([
            'descripcion_paralelo' => 'B'
        ]);
    }
}

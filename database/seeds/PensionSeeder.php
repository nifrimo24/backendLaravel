<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Enero',
            'fecha_vencimiento' => '2021-02-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Febrero',
            'fecha_vencimiento' => '2021-03-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Marzo',
            'fecha_vencimiento' => '2021-04-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Abril',
            'fecha_vencimiento' => '2021-05-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Enero',
            'fecha_vencimiento' => '2021-06-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Enero',
            'fecha_vencimiento' => '2021-07-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Enero',
            'fecha_vencimiento' => '2021-08-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Enero',
            'fecha_vencimiento' => '2021-09-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Enero',
            'fecha_vencimiento' => '2021-10-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Enero',
            'fecha_vencimiento' => '2021-11-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Enero',
            'fecha_vencimiento' => '2021-12-01',
            'pension_habilitada' => 1,
        ]);

        DB::table('pensiones')->insert([
            'descripcion_pension' => 'Mensualidad Enero',
            'fecha_vencimiento' => '2022-01-01',
            'pension_habilitada' => 1,
        ]);

    }
}

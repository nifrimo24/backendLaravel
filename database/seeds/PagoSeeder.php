<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagos')->insert([
            'descripcion_pago' => 'Pago por revisar'
        ]);

        DB::table('pagos')->insert([
            'descripcion_pago' => 'Pago Aprobado'
        ]);

        DB::table('pagos')->insert([
            'descripcion_pago' => 'Pago Rechazado'
        ]);
    }
}

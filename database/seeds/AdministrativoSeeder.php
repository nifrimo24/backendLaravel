<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministrativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrativos')->insert([
            'nombres_administrativo' => 'Darío Javier',
            'apellidos_administrativo' => 'Janeta Paca',
            'numero_identificacion_administrativo' => '0603935008',
            'fecha_nacimiento_administrativo' => '1994-09-13',
            'email_administrativo' => 'darday@hotmail.com',
            'celular_administrativo' => '0961119670',
            'convencional_administrativo' => '307039',
            'direccion_administrativo' => 'Riobamba',
            'password_administrativo' => Hash::make('123456789'),
        ]);

        DB::table('administrativos')->insert([
            'nombres_administrativo' => 'Nicolás',
            'apellidos_administrativo' => 'Morillo Ramos',
            'numero_identificacion_administrativo' => '0603928987',
            'fecha_nacimiento_administrativo' => '1995-06-24',
            'email_administrativo' => 'nifrimo24@gmail.com',
            'celular_administrativo' => '0987830622',
            'convencional_administrativo' => '2960840',
            'direccion_administrativo' => 'Riobamba',
            'password_administrativo' => Hash::make('123456789'),
        ]);
    }
}

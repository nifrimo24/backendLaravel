<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //*************** PRIMER CICLO ***********************/

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Taller de Introducción a la Naturopatía',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Comunicación Oral y Escrita',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Biología',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Química',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Anatomofisiología',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Biofísica',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Terapias Psicofísicas',
            'creditos_asignatura' => 100,
        ]);

        //*************** SEGUNDO CICLO ***********************/

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Reflexología',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Computación',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Deontología',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Taller de Botánica',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Taller 4 Elementos',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Inglés',
            'creditos_asignatura' => 100,
        ]);

        //*************** TERCER CICLO ***********************/

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Fisioterapia',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Masajes Terapéuticos',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Metodología de la Investigación',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Psicología',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Semiología I',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Urgencias Médicas',
            'creditos_asignatura' => 100,
        ]);

        //*************** CUARTO CICLO ***********************/

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Trofología y Trofoterapia',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Elaboración de Productos Naturales',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Semiología II',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Diagnósticos Alternativos',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Farmacopea',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Iridología',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Apiterapia',
            'creditos_asignatura' => 100,
        ]);

        //*************** QUINTO CICLO ***********************/

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Flores de Bach',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Clínica Naturopática',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Fundamentos de Medicina Oriental',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Administración Hospitalaria',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Yoga Clásico',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Cosmovisión Andina Cultural y Ecológica',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Quiropraxia',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Masaje Clásico',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Digitopuntura',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Psicoprofilaxis para el Parto',
            'creditos_asignatura' => 100,
        ]);

        DB::table('asignaturas')->insert([
            'descripcion_asignatura' => 'Yoga Terapéutico',
            'creditos_asignatura' => 100,
        ]);
    }
}

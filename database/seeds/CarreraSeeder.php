<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert([
            'descripcion_carrera' => 'Tecnología en Naturopatía',
            'modalidad_carrera_id' => 1,
            'titulo_carrera_id' => 1,
            'tipo_carrera_id' => 1,
            'duracion_carrera' => '3 años',
            'jornada_carrera_id' => 2,

            'mision_carrera' => 'Formar profesionales competentes, con visión humanista y pensamiento ecológico, articulando el componente académico, la investigación y la vinculación con la sociedad; a través de la aplicación y promoción de la Naturopatía para el mejoramiento de la calidad de vida de la comunidad.',

            'vision_carrera' => 'La carrera de Tecnología en Naturopatía se proyecta hacia el reconocimiento académico nacional e internacional, permitiendo a sus profesionales integrarse en equipos multidisciplinarios de salud y generar emprendimientos, que contribuyan al desarrollo de la matriz productiva.',

            'perfil_egreso_carrera' => 'Reconoce la estructura y función del cuerpo humano determinando los procesos fisiopatológicos; aplica los elementos de la naturaleza, terapias manuales, energéticas, técnicas de psicofísica, yoga y psicoprofilaxis del parto que garantizan el bienestar físico, mental y espiritual.

            Evalúa los requerimientos nutricionales, ejecuta acciones de promoción de salud, elabora productos naturales conociendo los principios activos y propiedades de plantas medicinales para el tratamiento de patologías comunes; utiliza diferentes instrumentos, equipos y herramientas de tecnología en apoyo a la Naturopatía.

            Ejecuta procesos investigativos para el desarrollo de proyectos dirigidos a la solución de diversas problemáticas de salud con enfoque científico en correspondencia con las culturas autóctonas del país en el campo de la sanación y terapias alternativas que permitan la atención integral e inclusiva de la comunidad',

            'campo_ocupacional_carrera' => 'El profesional graduado de la carrera Tecnología en Naturopatía podrá desempeñarse en instituciones de salud públicas y privadas, centros terapéuticos, unidades de bienestar de salud, centros de masaje y rehabilitación física, instalaciones deportivas, farmacias naturistas, establecimientos de productos naturales; así como, consultas y otros emprendimientos en su ámbito de actuación, ampliamente demandados por la sociedad, para contribuir al logro del bienestar físico, mental y espiritual.',
        ]);

        DB::table('carreras')->insert([
            'descripcion_carrera' => 'Tecnología en Naturopatía en Clínica y Cuidado del Paciente',
            'modalidad_carrera_id' => 2,
            'titulo_carrera_id' => 2,
            'tipo_carrera_id' => 1,
            'duracion_carrera' => '3 años',
            'jornada_carrera_id' => 2,

            'mision_carrera' => 'La Tecnología en Naturopatía, mención Clínica y Cuidado del Paciente, forma profesionales críticos, solidarios y competentes para el cuidado del paciente, con la implementación de técnicas propias de la Naturopatía; capaces de aplicar los conocimientos adquiridos y habilidades desarrolladas, para mejorar la calidad de vida de la ciudadanía.',

            'vision_carrera' => 'La carrera de Tecnología en Naturopatía, mención Clínica y Cuidado del Paciente se orienta a liderar zonal y nacionalmente la formación integral, como protagonistas en el cuidado al paciente, utilizando técnicas y recursos propios de la medicina natural, gracias a las orientaciones académicas e investigativas que reciben en su proceso de formación.',

            'perfil_egreso_carrera' => 'Aplica los fundamentos de la Naturopatía, entre otras terapias alternativas y complementarias; evalúa el estado de salud para el tratamiento holístico, comprendiendo el origen del desequilibrio físico, energético y emocional del paciente.

            Establece un plan terapéutico personalizado e identifica las necesidades y problemas del cuidado del individuo y su familia.

            Determina los principios de la gestión y administración de servicios de salud en el ámbito de la Naturopatía para el desarrollo de emprendimientos laborales.',

            'campo_ocupacional_carrera' => 'El profesional graduado de la carrera Tecnología en Naturopatía con Mención en Clínica y Cuidado del Paciente podrá desempeñarse en instituciones de salud públicas y privadas, centros terapéuticos, unidades de bienestar de salud, farmacias naturistas, establecimientos de productos naturales; así como, consultas y otros emprendimientos dirigidos a una atención personalizada del paciente que se sustenta en la clínica naturopática y la evaluación del estado de salud del individuo y la familia',
        ]);

        DB::table('carreras')->insert([
            'descripcion_carrera' => 'Tecnología en Naturopatía Masajes Terapéuticos',
            'modalidad_carrera_id' => 2,
            'titulo_carrera_id' => 3,
            'tipo_carrera_id' => 1,
            'duracion_carrera' => '3 años',
            'jornada_carrera_id' => 2,

            'mision_carrera' => 'La Tecnología en Naturopatía, mención Masajes Terapéuticos, forma profesionales con estándares de calidad académica, tecnológica, humanística y con sentido ecológico; capaces de aplicar terapias alternativas integrales, potenciando las terapias manuales, que incidan en el mejoramiento de la calidad de vida del individuo, la familia y la comunidad.',

            'vision_carrera' => 'La carrera de Tecnología en Naturopatía, mención Masajes terapéuticos, comprometida con la academia, la investigación y la vinculación con la sociedad, liderará la aplicación de masajes con terapias alternativas, que aporten al mejoramiento de las dolencias del paciente, con el uso óptimo de los recursos naturales y con una perspectiva ecológica.',

            'perfil_egreso_carrera' => 'Emplea las diferentes terapias que abarca la Naturopatía para el tratamiento integral del individuo y mejora de su calidad de vida.

            Aplica con destreza los diferentes procedimientos de las terapias manuales: masaje terapéutico, masaje clásico, masaje reductivo, técnicas de fisioterapia, reflexología, digitopuntura, quiropraxia y drenaje linfático en función de restablecer el estado salud físico, energético y espiritual de las personas.

            Contará también con las competencias suficientes para incidir en la resolución de problemas de salud del entorno local y global, con prácticas como el yoga y Qi Gong asegurando el bienestar a quienes lo practican.',

            'campo_ocupacional_carrera' => 'El profesional graduado de la carrera Tecnología en Naturopatía con mención en Masajes Terapéuticos podrá desempeñarse en instituciones de salud públicas y privadas, centros terapéuticos, unidades de bienestar de salud, centros de masaje y rehabilitación física, instalaciones deportivas, SPAs, farmacias naturistas, establecimientos de productos naturales; así como, consultas y otros emprendimientos dirigidos especialmente a las terapias manuales, ampliamente demandados por la sociedad.',
        ]);

        DB::table('carreras')->insert([
            'descripcion_carrera' => 'Tecnología Superior en Desarrollo de Software',
            'modalidad_carrera_id' => 3,
            'titulo_carrera_id' => 4,
            'tipo_carrera_id' => 1,
            'duracion_carrera' => '2 años',
            'jornada_carrera_id' => 2,

            'mision_carrera' => 'La Tecnología Superior en Desarrollo de Software forma profesionales competentes, capaces de elaborar programas que den solución a problemas de interactividad y procesamiento digital de datos en todas las áreas, articulando el componente académico, la investigación y la vinculación con la sociedad; contribuyendo al fortalecimiento de las competencias digitales.',

            'vision_carrera' => 'La carrera se proyecta como líder a nivel nacional, en la formación de profesionales competitivos, emprendedores e innovadores, a través de la generación, transmisión, adaptación y aplicación del conocimiento en cuanto al desarrollo de software, para contribuir al fortalecimiento de la cultura digital empresarial del país.',

            'perfil_egreso_carrera' => 'Gestiona, formula, ejecuta y monitorea procedimientos de proyectos de sistemas informáticos con el propósito de optimizar la información y así atender los requerimientos del entorno.

            Además, desarrolla aplicaciones informáticas para la resolución de problemas relacionados con el manejo y procesamiento de datos, aplicando criterios de ingeniería de software aceptados internacionalmente.

            Programa sistemas multiplataforma y sitios web en lenguajes de programación actuales y novedosos, como respuesta a las crecientes demandas del mercado, permitiendo el emprendimiento en diversos sectores de la producción y los servicios, relacionados con los sistemas comerciales, contables y financieros.',

            'campo_ocupacional_carrera' => 'El Tecnólogo Superior en Desarrollo de Software podrá incorporarse tanto a instituciones públicas y privadas como empleado o como profesional emprendedor, desempeñándose como programador de aplicaciones de escritorio, entornos web y de dispositivos móviles.',
        ]);
    }
}

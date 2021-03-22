<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(ModalidadCarreraSeeder::class);
        $this->call(TipoCarreraSeeder::class);
        $this->call(TipoColegioSeeder::class);
        $this->call(TituloCarreraSeeder::class);
        $this->call(JornadaCarreraSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(TipoMatriculaSeeder::class);
        $this->call(EstadoMatriculaSeeder::class);
        $this->call(PeriodoAcademicoSeeder::class);
        $this->call(TipoDocumentoSeeder::class);
        $this->call(CicloAcademicoSeeder::class);
        $this->call(ParaleloSeeder::class);
        $this->call(AsignaturaSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(AsignaturaCursoCarreraSeeder::class);
        $this->call(PagoSeeder::class);
        $this->call(TipoSangreSeeder::class);
        $this->call(OcupacionEstudianteSeeder::class);
        $this->call(TipoBachilleratoSeeder::class);
        $this->call(EtniaSeeder::class);
        $this->call(NivelFormacionSeeder::class);
        $this->call(AdministrativoSeeder::class);
        $this->call(PensionSeeder::class);
    }
}

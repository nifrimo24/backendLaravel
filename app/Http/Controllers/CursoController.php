<?php

namespace App\Http\Controllers;

use App\Asignatura;
use App\AsignaturaCursoCarrera;
use App\Curso;
use App\Paralelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    private $status_code = 200;

    //GET listar cursos
    public function index(Request $request)
    {

        $cursos = DB::table('cursos')
            ->join('asignaturas_cursos_carreras', 'cursos.id_curso', '=', 'asignaturas_cursos_carreras.curso_id')
            ->join('paralelos', 'cursos.paralelo_id', '=', 'paralelos.id_paralelo')
            ->join('asignaturas', 'asignaturas_cursos_carreras.asignatura_id', '=', 'asignaturas.id_asignatura')
            ->select('cursos.*', 'paralelos.descripcion_paralelo', 'asignaturas.descripcion_asignatura')
            ->where([
                ['asignaturas_cursos_carreras.carrera_id', '=', $request->carrera_id],
                ['cursos.ciclo_academico_id', '=', $request->ciclo_academico_id],
                ['cursos.paralelo_id', '=', $request->paralelo_id],

            ])->get();

        return ($cursos)->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return $curso;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

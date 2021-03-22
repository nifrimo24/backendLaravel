<?php

namespace App\Http\Controllers;

use App\Asignatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cursos = DB::table('cursos')
            ->join('asignaturas_cursos_carreras', 'cursos.id_curso', '=', 'asignaturas_cursos_carreras.curso_id')
            ->select('asignaturas_cursos_carreras.asignatura_id', 'cursos.id_curso')
            ->where('cursos.ciclo_academico_id', $request->ciclo_academico_id)
            ->where('asignaturas_cursos_carreras.carrera_id', $request->carrera_id)
            ->get();

        $vCursos = array();

        foreach ($cursos as $curso) {
            //$vCursos[] = $curso->id_curso;

            //$vCursos[] = Asignatura::where('id_asignatura', $curso->id_curso)->get();
            $vCursos[] = Asignatura::where('id_asignatura', $curso->asignatura_id)->get();

            //print $curso->asignatura_id;
        }
        return ($vCursos);
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
    public function show($id)
    {
        //
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

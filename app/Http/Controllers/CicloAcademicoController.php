<?php

namespace App\Http\Controllers;

use App\CicloAcademico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CicloAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cicloBuscar')) {

            $ciclos = CicloAcademico::orderBy('id_ciclo_academico')
                ->Where('id_ciclo_academico', $request->cicloBuscar)
                ->orwhere('descripcion_ciclo_academico', $request->cicloBuscar)
                ->get();
        } else {

            $ciclos = DB::table('ciclos_academicos')
                ->orderBy('id_ciclo_academico', 'asc')
                ->get();
        }

        return $ciclos;
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

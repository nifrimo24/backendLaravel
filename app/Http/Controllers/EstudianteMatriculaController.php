<?php

namespace App\Http\Controllers;

use App\EstudianteMatricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EstudianteMatriculaController extends Controller
{

    public function verificar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'estudiante_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => 'validation_error', 'errors' => $validator->errors()]);
        }

        $existentes = EstudianteMatricula::where('estudiante_id', $request->estudiante_id)->first();

        if (is_null($existentes)) {

            return response()->json(['status' => 'succes', 'success' => true, 'message' => 'El estudiante puede matricularse']);
        } else {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'El estudiante ya tiene una matricula en proceso']);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $matriculasEstudiante = EstudianteMatricula::where('estudiante_id', $request->id_estudiante)->get();

        return $matriculasEstudiante;
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

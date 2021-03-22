<?php

namespace App\Http\Controllers;

use App\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AprobarController extends Controller
{
    private $status_code = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $matricula = Matricula::find($id);

        $matricula->estado_matricula_id = 2;
        $matricula->save();

        $pagoMatricula = DB::table('pagos_matriculas')
        ->where('matricula_id', $id)
        ->update(['pago_id' => 2]);

        if ($matricula->wasChanged()) {
            return response()->json(['status' => $this->status_code, 'success' => true, 'message' => 'Matricula y PagoAprobados', 'matricula' => $matricula, 'pago'  => $pagoMatricula]);
        } else {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'Actualización Fallido']);
        }
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

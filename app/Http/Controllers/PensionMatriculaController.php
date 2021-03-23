<?php

namespace App\Http\Controllers;

use App\PensionMatricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PensionMatriculaController extends Controller
{
    private $status_code = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $img = PensionMatricula::where('matricula_id', $request->id_matricula)
        ->select('comprobante_pago')
        ->get();
    //return Storage::url("comprobantes/$img->comprobante_pago");
    foreach ($img as $archivo) {
        $nombre = $archivo->comprobante_pago;
    }
    $link = Storage::url("comprobantes/$nombre");
    return ($link);
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
        if ($request->file('url_comprobante')) {

            $archivo = $request->file('url_comprobante');
            $nombreArchivo = time() . "." . $request->file('url_comprobante')->extension();
            $ubicacion = storage_path('comprobantes');
            $archivo->move($ubicacion, $nombreArchivo);
        }

        $datosPensionMatricula = array(
            'matricula_id' => $request->matricula_id,
            'comprobante_pension' => $nombreArchivo,
            'cantidad_pension' => $request->valor_cancelado,
            'estado_pension' => $request->estado_pension,
            'fecha_pago_matricula' => $request->fecha_matricula,
            'pension_id' => $request->pension_id
        );

        $pensionMatricula = PensionMatricula::create($datosPensionMatricula);

        if ((!is_null($pensionMatricula))) {
            return response()->json(['status' => $this->status_code, 'success' => true, 'message' => 'Pensión Registrada Satisfactoriamente', 'data' => $pensionMatricula]);
        } else {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'Registro de Pensión Fallido']);
        }
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
        PensionMatricula::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Comprobante Pensión eliminada correctamente'
        ], 200);
    }
}

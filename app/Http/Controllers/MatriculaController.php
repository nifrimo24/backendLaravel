<?php

namespace App\Http\Controllers;

use App\EstudianteCarrera;
use App\EstudianteMatricula;
use App\Matricula;
use App\PagoMatrícula;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{
    private $status_code = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cursoID = DB::table('cursos')
            ->join('asignaturas_cursos_carreras', 'cursos.id_curso', '=', 'asignaturas_cursos_carreras.curso_id')
            ->select('cursos.id_curso')
            ->where([
                ['asignaturas_cursos_carreras.carrera_id', '=', $request->carrera_id],
                ['cursos.ciclo_academico_id', '=', $request->ciclo_academico_id],
            ])->get();

        $cursoID->toArray();

        foreach ($cursoID as $id) {
            $idCurso = $id->id_curso;


        }

        $matriculas = DB::table('matriculas')
        ->join('estados_matricula', 'matriculas.estado_matricula_id', 'estados_matricula.id_estado_matricula')
        ->join('pagos_matriculas', 'matriculas.id_matricula', 'pagos_matriculas.matricula_id')
        ->join('cursos', 'matriculas.curso_id', 'cursos.id_curso')
        ->join('ciclos_academicos', 'cursos.ciclo_academico_id', 'ciclos_academicos.id_ciclo_academico')
        ->join('estudiantes_matriculas', 'matriculas.id_matricula', 'estudiantes_matriculas.matricula_id')
        ->join('estudiantes', 'estudiantes_matriculas.estudiante_id', 'estudiantes.id_estudiante')
        ->join('pagos', 'pagos_matriculas.pago_id', 'pagos.id_pago')
        ->select('matriculas.*',
                'estudiantes.nombres_estudiante',
                'estudiantes.apellidos_estudiante',
                'estados_matricula.descripcion_estado_matricula',
                'cursos.*',
                'ciclos_academicos.descripcion_ciclo_academico',
                'pagos_matriculas.*',
                'pagos.descripcion_pago',)
        ->where([
            ['matriculas.curso_id', $idCurso],
        ])->get();

    return $matriculas;
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
        $validator = Validator::make($request->all(), [
            'tipo_matricula_id' => 'required',
            //'estudiante_id' => 'required',
            'estado_matricula_id' => 'required',
            'periodo_academico_id' => 'required',
            'ciclo_academico_id' => 'required',
            'curso_id' => 'required',
            'fecha_matricula' => 'required',
            //'costo_matricula' => 'required',
            'valor_cancelado' => 'required',
            'url_compromiso' => 'required|mimes:pdf',
            //'url_comprobante' => 'required|mimes:jpg',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => 'validation_error', 'errors' => $validator->errors()]);
        }


        //$existente = $existentes->estudiante_id;
        //dd($existentes);

        if ($request->file('url_compromiso')) {

            $archivo = $request->file('url_compromiso');
            $nombreArchivoCompromiso = time() . "." . $request->file('url_compromiso')->extension();
            $ubicacion = storage_path('compromisos');
            $archivo->move($ubicacion, $nombreArchivoCompromiso);
        }

        if ($request->tipo_matricula_id == 1){

            if(($request->ciclo_academico_id == 1 )|| ($request->ciclo_academico_id == 3) || ($request->ciclo_academico_id == 5)){

                $costo_matricula = 353;

            }else {

                $costo_matricula = 118;
            }

        }else if ($request->tipo_matricula_id == 2){

            if(($request->ciclo_academico_id == 1 )|| ($request->ciclo_academico_id == 3) || ($request->ciclo_academico_id == 5)){

                $costo_matricula = 400;

            }else {

                $costo_matricula = 143;
            }
        }


        $datosMatricula = array(
            'tipo_matricula_id' => $request->tipo_matricula_id,
            'estado_matricula_id' => $request->estado_matricula_id,
            'periodo_academico_id' => $request->periodo_academico_id,
            'curso_id' => $request->curso_id,
            'fecha_matricula' => $request->fecha_matricula,
            'costo_matricula' => $costo_matricula,
            'valor_cancelado' => $request->valor_cancelado,
            'valor_pendiente' => ($costo_matricula - $request->valor_cancelado),
            'carta_compromiso' => $nombreArchivoCompromiso,

        );

        $matricula =  Matricula::create($datosMatricula);

        $matricula_id =  $matricula->id_matricula;

        $datosMatriculaEstudiante = array(

            'matricula_id' => $matricula_id,
            'estudiante_id'  => $request->estudiante_id,

        );

        $estudianteMatricula = EstudianteMatricula::create($datosMatriculaEstudiante);

        if ($request->file('url_comprobante')) {

            $archivo = $request->file('url_comprobante');
            $nombreArchivo = time() . "." . $request->file('url_comprobante')->extension();
            $ubicacion = storage_path('comprobantes');
            $archivo->move($ubicacion, $nombreArchivo);
        }

        $datosPagoMatricula = array(
            'matricula_id' => $matricula_id,
            'comprobante_pago' => $nombreArchivo,
            'cantidad_pago' => $request->valor_cancelado,
            'fecha_pago_matricula' => $request->fecha_matricula,
            'pago_id' => $request->pago_id
        );

        $pagoMatricula = PagoMatrícula::create($datosPagoMatricula);

        if ((!is_null($matricula)) && (!is_null($estudianteMatricula)) && (!is_null($pagoMatricula))) {
            return response()->json(['status' => $this->status_code, 'success' => true, 'message' => 'Estudiante Matriculado Satisfactoriamente', 'data' => $matricula]);
        } else {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'Matricula  de Estudiante Fallido']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Matricula $matricula)
    {

        $datosMatricula = array(
            'tipo_matricula' => $matricula->tiposMatricula->descripcion_tipo_matricula,
            'estados_matricula' => $matricula->estadosMatricula->descripcion_estado_matricula,
            'valor_cancelado' => $matricula->valor_cancelado,
            'valor_pendiente' => $matricula->valor_pendiente,
        );

        return $datosMatricula;
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
    public function update($id)
    {
        $matricula = Matricula::find($id);

        $matricula->estado_matricula_id = 2;
        $matricula->save();

        $pagoMatricula = DB::table('pagos_matriculas')
        ->where('matricula_id', $id)
        ->update(['pago_id' => 2]);

        if ($matricula->wasChanged()) {
            return response()->json(['status' => $this->status_code, 'success' => true, 'message' => 'Matricula Aprobada', 'matricula' => $matricula, 'pago'  => $pagoMatricula]);
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

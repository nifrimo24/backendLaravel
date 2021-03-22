<?php

namespace App\Http\Controllers;

use App\Colegio;
use App\ColegioBachillerato;
use App\EstudianteCarrera;
use App\TituloAcademico;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class EstudianteController extends Controller
{
    private $status_code = 200;

    //GET listar estudiantes
    public function index(Request $request)
    {
        if ($request->has('txtBuscar')) {

            $estudiantes = User::where('numero_identificacion_estudiante', $request->txtBuscar)
                ->orWhere('email_estudiante', $request->txtBuscar)
                ->get();
        } else {

            $estudiantes = User::all();
        }

        return $estudiantes;
    }

     //GET listar matriculas
     public function matriculas(Request $request)
     {
        $matriculas = DB::table('matriculas')
        ->join('estados_matricula', 'matriculas.estado_matricula_id', 'estados_matricula.id_estado_matricula')
        ->join('estudiantes_matriculas', 'matriculas.id_matricula', 'estudiantes_matriculas.matricula_id')
        ->join('estudiantes', 'estudiantes_matriculas.estudiante_id', 'estudiantes.id_estudiante')
        ->select('matriculas.*', 'estudiantes.nombres_estudiante', 'estudiantes.apellidos_estudiante', 'estados_matricula.descripcion_estado_matricula')
        ->where([
            ['estudiantes.id_estudiante', $request->estudiante_id],
        ])->get();

    return $matriculas;
     }



    private function cargarArchivo($file)
    {

        $nombreArchivo = time() . '.' . $file->extension();
        $ubicacion = public_path('../storage/profile-pics', $nombreArchivo);
        $file->move($ubicacion, $file);

        return $nombreArchivo;
    }
    //POST insertar datos de un estudiante
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombres_estudiante' => 'required',
            'apellidos_estudiante' => 'required',
            'numero_identificacion_estudiante' => 'required|max:10|unique:estudiantes',
            'fecha_nacimiento_estudiante' => 'required',
            'email_estudiante' => 'required|email|unique:estudiantes',
            'celular_estudiante' => 'required|max:10',
            'convencional_estudiante' => 'required',
            'direccion_estudiante' => 'required',
            //'codigo_postal_estudiante' => 'required',
            'password_estudiante' => 'required',
            //'imagen_perfil_estudiante' => 'required|mimes:jpg',
            'carrera_id' => 'required',
            'edad' => 'required',
            'tipo_sangre_id' => 'required',
            'etnia_id' => 'required',
            'tipo_bachillerato_id' => 'required',
            'nivel_formacion_estudiante_id' => 'required',
            'ocupacion_estudiante_id' => 'required',

            'tipo_colegio_id' => 'required',
            'descripcion_colegio' => 'required',

            //'colegio_id' => 'required',
            // 'descripcion_titulo_academico ' => 'required',
            /*


                edad
                tipo sangre
                raza
                tipo bachillerato
                tipo colegio
                ---- llenar la tabla colegio y bachillerato_colegio
                nivel_formacion
                educacion_superior
                titulo_academico
                ocupacion estudiante


            */
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => 'validation_error', 'errors' => $validator->errors()]);
        }

        //Guardo datos del colegio
        $datosColegio = array(

            'descripcion_colegio' => $request->descripcion_colegio,
            'tipo_colegio_id' => $request->tipo_colegio_id,
        );

        $colegio = Colegio::create($datosColegio);
        $colegio_id = $colegio->id_colegio;

        $datosColegioBachillerato = array(

            'tipo_bachillerato_id' => $request->tipo_bachillerato_id,
            'colegio_id' => $colegio_id,
        );

        $colegio = ColegioBachillerato::create($datosColegioBachillerato);

        $datosTituloAcademico = array(
            'descripcion_titulo_academico' => $request->descripcion_titulo_academico
        );

        $tituloAcademico = TituloAcademico::create($datosTituloAcademico);
        $titulo_academico_id =  $tituloAcademico->id_titulo_academico;


        $datosEstudiante = array(
            'nombres_estudiante' => $request->nombres_estudiante,
            'apellidos_estudiante' => $request->apellidos_estudiante,
            'numero_identificacion_estudiante' => $request->numero_identificacion_estudiante,
            'fecha_nacimiento_estudiante' => $request->fecha_nacimiento_estudiante,
            'email_estudiante' => $request->email_estudiante,
            'celular_estudiante' => $request->celular_estudiante,
            'convencional_estudiante' => $request->convencional_estudiante,
            'direccion_estudiante' => $request->direccion_estudiante,
            'edad' => $request->edad,
            'tipo_sangre_id' => $request->tipo_sangre_id,
            'etnia_id' => $request->etnia_id,
            'tipo_bachillerato_id' => $request->tipo_bachillerato_id,
            'nivel_formacion_estudiante_id' => $request->nivel_formacion_estudiante_id,
            'ocupacion_estudiante_id' => $request->ocupacion_estudiante_id,
            'titulo_academico_id' => $titulo_academico_id,

            //'codigo_postal_estudiante' => $request->codigo_postal_estudiante,
            //'imagen_perfil_estudiante' => $this->cargarArchivo($request->imagen_perfil_estudiante),
            'password_estudiante' => Hash::make($request->password_estudiante),

        );

        $estudiante_status = User::where('email_estudiante', $request->email_estudiante)->first();

        if (!is_null($estudiante_status)) {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'El Estudiante ya se encuentra registrado']);
        }

        $estudiante = User::create($datosEstudiante);

        $estudiante_id = $estudiante->id_estudiante;

        $datosInscripcion  = array(
            'carrera_id'  => $request->carrera_id,
            'estudiante_id' => $estudiante_id,
        );

        $inscripcion = EstudianteCarrera::create($datosInscripcion);

        if ((!is_null($estudiante)) && (!is_null($inscripcion))) {
            return response()->json(['status' => $this->status_code, 'success' => true, 'message' => 'Estudiante Registrado Satisfactoriamente', 'data' => $estudiante]);
        } else {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'Registro  de Estudiante Fallido']);
        }
    }

    //GET retorna un solo estudiante
    public function show(User $estudiante)
    {

        $datos =  array();

        $datos[] = EstudianteCarrera::where('estudiante_id', $estudiante->id_estudiante)->get();
        $datos[] = $estudiante;

        return json_encode($datos);
    }

    //PUT actualizar datos de un estudiante
    public function update(Request $request, User $estudiante)
    {
        $validator = Validator::make($request->all(), [
            'nombres_estudiante' => 'required',
            'apellidos_estudiante' => 'required',
            'fecha_nacimiento_estudiante' => 'required',
            'email_estudiante' => 'required|email|unique:estudiantes,email_estudiante,' . $estudiante->id_estudiante . ',id_estudiante',
            //'email_estudiante' => ['required',Rule::unique('estudiantes')->ignore($estudiante->id_estudiante) ],
            'celular_estudiante' => 'required|max:10',
            'convencional_estudiante' => 'required',
            'direccion_estudiante' => 'required',
            //'codigo_postal_estudiante' => 'required',
            'password_estudiante' => 'required',
            //'imagen_perfil_estudiante' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => 'validation_error', 'errors' => $validator->errors()]);
        }

        $datosEstudiante = array(
            'nombres_estudiante' => $request->nombres_estudiante,
            'apellidos_estudiante' => $request->apellidos_estudiante,
            //'numero_identificacion_estudiante' => $request->numero_identificacion_estudiante,
            'fecha_nacimiento_estudiante' => $request->fecha_nacimiento_estudiante,
            'email_estudiante' => $request->email_estudiante,
            'celular_estudiante' => $request->celular_estudiante,
            'convencional_estudiante' => $request->convencional_estudiante,
            'direccion_estudiante' => $request->direccion_estudiante,
            //'codigo_postal_estudiante' => $request->codigo_postal_estudiante,
            //'imagen_perfil_estudiante' => $this->cargarArchivo($request->imagen_perfil_estudiante),
            'password_estudiante' => Hash::make($request->password_estudiante),
        );

        $estudiante_status = User::where('email_estudiante', $request->email_estudiante)->first();

        if (is_null($estudiante_status)) {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'El Estudiante ya se encuentra registrado']);
        }

        $estudiante->update($datosEstudiante);

        if (!is_null($estudiante)) {
            return response()->json(['status' => $this->status_code, 'success' => true, 'message' => 'Estudiante Actualizado Satisfactoriamente', 'data' => $estudiante]);
        } else {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'Actualización Fallido']);
        }
    }

    //DELETE Eliminar un estudiante
    public function destroy($id)
    {
        User::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Estudiante eliminado correctamente'
        ], 200);
    }
}

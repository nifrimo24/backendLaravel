<?php

namespace App\Http\Controllers;

use App\Administrativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdministrativoController extends Controller
{
    private $status_code = 200;

    //GET listar estudiantes
    public function index(Request $request)
    {
        if ($request->has('txtBuscar')) {

            $admins = Administrativo::where('numero_identificacion_administrativo', $request->txtBuscar)
                ->orWhere('email_administrativo', $request->txtBuscar)
                ->get();
        } else {

            $admins = Administrativo::all();
        }

        return $admins;
    }

    //POST insertar datos de un estudiante
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombres_administrativo' => 'required',
            'apellidos_administrativo' => 'required',
            'numero_identificacion_administrativo' => 'required|max:10|unique:administrativos',
            'fecha_nacimiento_administrativo' => 'required',
            'email_administrativo' => 'required|email|unique:administrativos',
            'celular_administrativo' => 'required|max:10',
            'convencional_administrativo' => 'required',
            'direccion_administrativo' => 'required',
            //'codigo_postal_estudiante' => 'required',
            'password_administrativo' => 'required',
            //'imagen_perfil_estudiante' => 'required|mimes:jpg',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => 'validation_error', 'errors' => $validator->errors()]);
        }

        $datosAdmin = array(
            'nombres_administrativo' => $request->nombres_administrativo,
            'apellidos_administrativo' => $request->apellidos_administrativo,
            'numero_identificacion_administrativo' => $request->numero_identificacion_administrativo,
            'fecha_nacimiento_administrativo' => $request->fecha_nacimiento_administrativo,
            'email_administrativo' => $request->email_administrativo,
            'celular_administrativo' => $request->celular_administrativo,
            'convencional_administrativo' => $request->convencional_administrativo,
            'direccion_administrativo' => $request->direccion_administrativo,
            //'codigo_postal_estudiante' => $request->codigo_postal_estudiante,
            //'imagen_perfil_estudiante' => $this->cargarArchivo($request->imagen_perfil_estudiante),
            'password_administrativo' => Hash::make($request->password_administrativo),
        );

        $admin_status = Administrativo::where('email_administrativo', $request->email_administrativo)->first();

        if (!is_null($admin_status)) {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'El Administrador ya se encuentra registrado']);
        }

        $admin = Administrativo::create($datosAdmin);

        if (!is_null($admin)) {
            return response()->json(['status' => $this->status_code, 'success' => true, 'message' => 'Administrador Registrado Satisfactoriamente', 'data' => $admin]);
        } else {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'Registro de Administrador Fallido']);
        }
    }

    //GET retorna un solo administrador
    public function show(Administrativo $admin)
    {
        return $admin;
    }

    //PUT actualizar datos de un administrador
    public function update(Request $request, Administrativo $administrador){

        $validator = Validator::make($request->all(), [
            'nombres_administrativo' => 'required',
            'apellidos_administrativo' => 'required',
            'numero_identificacion_administrativo' => 'required|max:10',
            'fecha_nacimiento_administrativo' => 'required',
            'email_administrativo' => 'required|email|unique:administrativos,email_administrativo,' . $administrador->id_administrativo . ',id_administrativo',
            'celular_administrativo' => 'required|max:10',
            //'convencional_administrativo' => 'required',
            'direccion_administrativo' => 'required',
            //'codigo_postal_estudiante' => 'required',
            'password_administrativo' => 'required',
            //'imagen_perfil_estudiante' => 'required|mimes:jpg',

        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => 'validation_error', 'errors' => $validator->errors()]);
        }

        $datosAdmin = array(
            'nombres_administrativo' => $request->nombres_administrativo,
            'apellidos_administrativo' => $request->apellidos_administrativo,
            'numero_identificacion_administrativo' => $request->numero_identificacion_administrativo,
            'fecha_nacimiento_administrativo' => $request->fecha_nacimiento_administrativo,
            'email_administrativo' => $request->email_administrativo,
            'celular_administrativo' => $request->celular_administrativo,
            'convencional_administrativo' => $request->convencional_administrativo,
            'direccion_administrativo' => $request->direccion_administrativo,
            //'codigo_postal_estudiante' => $request->codigo_postal_estudiante,
            //'imagen_perfil_estudiante' => $this->cargarArchivo($request->imagen_perfil_estudiante),
            'password_administrativo' => Hash::make($request->password_administrativo),
        );

        $admin_status = Administrativo::where('email_administrativo', $request->email_administrativo)->first();

        if (is_null($admin_status)) {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'El Administrador ya se encuentra registrado']);
        }

        $administrador->update($datosAdmin);

        if (!is_null($administrador)) {
            return response()->json(['status' => $this->status_code, 'success' => true, 'message' => 'Administrador actualizado Satisfactoriamente', 'data' => $administrador]);
        } else {
            return response()->json(['status' => 'failed', 'success' => false, 'message' => 'Actualización Fallido']);
        }
    }

    //DELETE Eliminar un administrador
    public function destroy($id)
    {
        Administrativo::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Administrativo eliminado correctamente'
        ], 200);
    }
}

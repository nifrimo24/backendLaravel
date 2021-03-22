<?php

namespace App\Http\Controllers;

use App\Administrativo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        if ($request->rol == "Estudiante") {

            $estudiante = User::where('numero_identificacion_estudiante', $request->numero_identificacion)->first();


            $carreras = DB::table('carreras')
                ->join('estudiantes_carreras', 'carreras.id_carrera', '=', 'estudiantes_carreras.carrera_id')
                ->select('carreras.descripcion_carrera')
                ->where('estudiantes_carreras.estudiante_id', '=', $estudiante->id_estudiante)
                ->get();

            foreach ($carreras as $carrera) {
                $desCarrera = $carrera->descripcion_carrera;
            }
            //dd($desCarrera);

            if (!is_null($estudiante) && Hash::check($request->password, $estudiante->password_estudiante)) {

                //$estudiante->api_token = Str::random(100);
                $token = $estudiante->createToken('Token Name')->accessToken;
                $estudiante->save();

                return response()->json(['success' => true, 'token' => $token, 'message' => 'Bienvenido al sistema Estudiante', 'estudiante_id' => $estudiante->id_estudiante, 'descripcion_carrera' => $desCarrera], 200);
            } else {

                return response()->json(['success' => false, 'message' => 'Datos incorrectos Estudiante']);
            }
        } else {

            $administrativo = Administrativo::where('numero_identificacion_administrativo', $request->numero_identificacion)->first();

            //dd($administrativo->password_administrativo);
            if (!is_null($administrativo) && Hash::check($request->password, $administrativo->password_administrativo)) {

                //$estudiante->api_token = Str::random(100);
                $token = $administrativo->createToken('Token Name')->accessToken;
                $administrativo->save();

                return response()->json(['success' => true, 'token' => $token, 'message' => 'Bienvenido al sistema Admin', 'administrativo_id' => $administrativo->id_administrativo], 200);
            } else {

                return response()->json(['success' => false, 'message' => 'Datos incorrectos de Admin']);
            }
        }
    }

    //LOGOUT Salida sistema estudiantes
    public function logout()
    {

        $usuario = auth()->user();
        //$estudiante->api_token = null;
        $usuario->tokens->each(function ($token, $key) {
            $token->delete();
        });

        $usuario->save();

        return response()->json([
            'res' => true,
            'message' => 'Hasta pronto'
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CarreraController extends Controller
{
    private $status_code = 200;

    //GET listar carreras
    public function index(Request $request)
    {
        if ($request->has('carreraBuscar')) {

            $carreras = Carrera::where('descripcion_carrera', $request->carreraBuscar)
                ->orWhere('id_carrera', $request->carreraBuscar)
                ->get();
        } else {

            $carreras = Carrera::all();
        }

        return $carreras;
    }

    //GET retorna una sola carrera
    public function show(Carrera $carrera)
    {

        $datosCarrera = array(
            'descripcion_carrera' => $carrera->descripcion_carrera,
            'duracion_carrera' => $carrera->duracion_carrera,
            'mision_carrera' => $carrera->mision_carrera,
            'vision_carrera' => $carrera->vision_carrera,
            'perfil_egreso_carrera' => $carrera->perfil_egreso_carrera,
            'campo_ocupacional_carrera' => $carrera->campo_ocupacional_carrera,
            "descripcion_modalidad_carrera" => $carrera->modalidadesCarrera->descripcion_modalidad_carrera,
            "descripcion_titulo_carrera" => $carrera->titulosCarrera->descripcion_titulo_carrera,
            "descripcion_titulo_carrera" => $carrera->tiposCarrera->descripcion_tipo_carrera,
            "descripcion_jornada_carrera" => $carrera->jornadasCarrera->descripcion_jornada_carrera
        );

        return $datosCarrera;
    }
}

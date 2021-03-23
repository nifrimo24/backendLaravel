<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('registro', 'EstudianteController@store');
Route::post('registro-admin', 'AdministrativoController@store');
Route::post('auth', 'AuthController@authenticate');

Route::ApiResource('listarcarreras', 'CarreraController');  //Revisar ruta

Route::ApiResource('estudiantes', 'EstudianteController');
Route::ApiResource('carrera', 'EstudianteCarreraController');

Route::ApiResource('carreras', 'CarreraController');
Route::ApiResource('admins', 'AdministrativoController');
Route::ApiResource('cursos', 'CursoController');
Route::ApiResource('matriculas', 'MatriculaController');
Route::ApiResource('aprobar', 'AprobarController');
Route::ApiResource('rechazar', 'RechazarController');
Route::get('matriculas-estudiante', 'EstudianteController@matriculas');
Route::ApiResource('ciclos', 'CicloAcademicoController');
Route::ApiResource('asignaturas', 'AsignaturaController');
Route::ApiResource('paralelos', 'ParaleloController');
Route::ApiResource('periodos', 'PeriodoAcademicoController');
Route::ApiResource('tipos-matriculas', 'TipoMatriculaController');
Route::ApiResource('estados-matriculas', 'EstadoMatriculaController');
Route::ApiResource('estudiantes-matriculas', 'EstudianteMatriculaController');
Route::ApiResource('pagos', 'PagoMatriculaController');

//Agregadas
Route::ApiResource('pensiones', 'PensionMatriculaController');
Route::ApiResource('listar-pensiones', 'PensionController');
Route::ApiResource('aprobar-pension', 'AprobarPensionController');

//Inscripcion
Route::ApiResource('tiposangre', 'TipoSangreController');
Route::ApiResource('etnias', 'EtniaController');
Route::ApiResource('bachilleratos', 'TipoBachilleratoController');
Route::ApiResource('colegios', 'TipoColegioController');
Route::ApiResource('formacion', 'NivelFormacionController');
Route::ApiResource('ocupaciones', 'OcupacionEstudianteController');
Route::post('verificar', 'EstudianteMatriculaController@verificar');

Route::group(['middleware' => 'auth:api'], function () {

    //Route::ApiResource('estudiantes', 'EstudianteController');
    //Route::ApiResource('carreras', 'CarreraController');
    //Route::ApiResource('admins', 'AdministrativoController');

    Route::post('logout', 'AuthController@logout');
});

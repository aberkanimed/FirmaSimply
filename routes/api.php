<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\PildoraController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AsistenciaController;

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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    // Asistencias
    Route::get('/listadoFirmas', [AsistenciaController::class, 'index']);
    Route::post('/firmar', [AsistenciaController::class, 'store']);
    Route::post('/numeroFirmasHoy', [AsistenciaController::class, 'getCountRegistrosAsistenciaHoy']);

    // Pildoras
    Route::get('/listadoPildoras', [PildoraController::class,'index']);
    Route::post('/crearPildora', [PildoraController::class,'store']);
    Route::put('/marcarPildora/{pildora}', [PildoraController::class,'update']);
    Route::delete('/borrarPildora/{pildora}', [PildoraController::class,'destroy']);

    // Tareas
    Route::get('/listadoTareas', [TareaController::class, 'index']);
    Route::post('/crearTarea', [TareaController::class, 'store']);
    Route::put('/marcarTarea/{tarea}', [TareaController::class, 'update']);
    Route::delete('/borrarTarea/{tarea}', [TareaController::class, 'destroy']);

    // Categoria
    Route::get('/listadoCategorias', [CategoriaController::class, 'index']);

    // Estadísticas
    // Route::prefix('estadisticas')->group(function () {
    //     Route::get('/pildoras', [PildoraController::class, '']);
    //     Route::get('/tareas', [TareaController::class, '']);
    // });

    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);

});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

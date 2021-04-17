<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\PCController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
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

//Crea las rutas para el recurso roles incluye (GET, POST, PUT, DELETE)
Route::get('v1/roles', [RolController::class, 'index']);
Route::post('v1/login', [AuthController::class, 'login']);
Route::post('v1/signup', [UsuarioController::class, 'store']);
Route::get('v1/carreras', [CarreraController::class, 'index']);

Route::group(['middleware' => 'auth:sanctum'], function() {

    Route::apiResource('v1/laboratorios', LaboratorioController::class);
    Route::apiResource('v1/programas', ProgramaController::class);
    Route::apiResource('v1/pcs', PCController::class);

    //Rutas protegidas de carreras
    Route::post('v1/carreras', [CarreraController::class, 'store']);
    Route::put('v1/carreras/{id}', [CarreraController::class, 'update']);
    Route::get('v1/carreras/{id}', [CarreraController::class, 'show']);
    Route::delete('v1/carreras/{id}', [CarreraController::class, 'destroy']);

    //Rutas protegidas de usuarios.
    Route::get('v1/usuarios', [UsuarioController::class, 'index']);
    Route::put('v1/usuarios/{id}', [UsuarioController::class, 'update']);
    Route::get('v1/usuarios/{id}', [UsuarioController::class, 'show']);
    Route::delete('v1/usuarios/{id}', [UsuarioController::class, 'show']);
});


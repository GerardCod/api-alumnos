<?php

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
Route::post('v1/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::apiResource('v1/carreras', CarreraController::class);
Route::apiResource('v1/usuarios', UsuarioController::class);
Route::apiResource('v1/laboratorios', LaboratorioController::class);
Route::apiResource('v1/pcs', PCController::class);
Route::apiResource('v1/programas', ProgramaController::class);

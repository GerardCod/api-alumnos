<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\RolController;
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

//Crea las rutas para el recurso roles incluye (GET, POST, PUT, DELETE)
Route::get('v1/roles', [RolController::class, 'index']);
Route::post('v1/carreras', [CarreraController::class, 'store']);

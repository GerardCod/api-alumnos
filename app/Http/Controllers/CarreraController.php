<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearCarrera;
use App\Models\Carrera;
use Illuminate\Http\Response;

class CarreraController extends Controller
{
    /**
     * Crea una carrera.
     * @param CrearCarrera $request
     * @return Response
     */
    public function store(CrearCarrera $request): Response {
        $carrera = Carrera::create($request->only('nombre'));
        return response($carrera, Response::HTTP_CREATED);
    }
}

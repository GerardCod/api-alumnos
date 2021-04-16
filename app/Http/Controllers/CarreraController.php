<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearCarrera;
use App\Models\Carrera;
use Illuminate\Http\Response;
use function GuzzleHttp\Promise\all;

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

    /**
     * Regresa la lista de carreras almacenadas en la base de datos.
     * @return Response
     */
    public function index(): Response {
        return response(Carrera::all(), Response::HTTP_OK);
    }
}

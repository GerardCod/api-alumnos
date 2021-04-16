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
     * @return Response cuerpo de la respuesta.
     */
    public function store(CrearCarrera $request): Response {
        $carrera = Carrera::create($request->only('nombre'));
        return response($carrera, Response::HTTP_CREATED);
    }

    /**
     * Regresa la lista de carreras almacenadas en la base de datos.
     * @return Response cuerpo de la respuesta.
     */
    public function index(): Response {
        return response(Carrera::all(), Response::HTTP_OK);
    }

    /**
     * Actualiza una carrera por id.
     * @param CrearCarrera $request cuerpo de la petición.
     * @param int $id Id de la carrera
     * @return Response cuerpo de la respuesta.
     */
    public function update(CrearCarrera $request, int $id): Response {
        $carrera = Carrera::find($id);
        $data = $request->only('nombre');
        $carrera->update($data);
        return response($carrera, Response::HTTP_OK);
    }

    /**
     * Elimina una carrera por id.
     * @param int $id Id de la carrera
     * @return Response cuerpo de la respuesta.
     */
    public function destroy(int $id): Response {
        Carrera::destroy($id);
        return response(['mensaje' => 'La carrera ha sido eliminada'], Response::HTTP_OK);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaboratorioRequest;
use App\Models\Laboratorio;
use Illuminate\Http\Response;

class LaboratorioController extends Controller
{
    /**
     * Crea un laboratorio.
     * @param LaboratorioRequest $request cuerpo de la petición.
     * @return Response cuerpo de la respuesta.
     */
    public function store(LaboratorioRequest $request): Response {
        $validData = $request->validated();
        $lab = Laboratorio::create($validData);
        return response($lab, Response::HTTP_CREATED);
    }

    /**
     * Regresa la lista de laboratorios en la base de datos.
     * @return Response cuerpo de la respuesta.
     */
    public function index(): Response {
        return response(Laboratorio::all(), Response::HTTP_OK);
    }

    /**
     * Actualiza un laboratorio.
     * @param LaboratorioRequest $request cuerpo de la petición.
     * @param int $id id del laboratorio.
     * @return Response cuerpo de la respuesta.
     */
    public function update(LaboratorioRequest $request, int $id): Response {
        $lab = Laboratorio::find($id);
        $validData = $request->validated();
        $lab->update($validData);
        return response($lab, Response::HTTP_OK);
    }

    /**
     * Elimina un laboratorio por id.
     * @param int $id id del laboratorio.
     * @return Response cuerpo de la respuesta.
     */
    public function destroy(int $id): Response
    {
        $rows = Laboratorio::destroy($id);
        if ($rows > 0) {
            return response(['mensaje' => 'Laboratorio eliminado'], Response::HTTP_OK);
        }
        return response(['mensaje' => 'Problemas al eliminar el laboratorio'], Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * Regresa la información de un laboratorio por id.
     * @param int $id ID del laboratorio.
     * @return Response cuerpo de la respuesta.
     */
    public function show(int $id): Response {
        return response(Laboratorio::find($id), Response::HTTP_OK);
    }
}

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
}

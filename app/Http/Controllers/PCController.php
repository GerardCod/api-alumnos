<?php

namespace App\Http\Controllers;

use App\Http\Requests\PCRequest;
use App\Models\PC;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PCController extends Controller
{
    //
    /**
     * Crea un nuevo PC.
     * @param PCRequest $request cuerpo de la petición.
     * @return Response cuerpo de la respuesta.
     */
    public function store(PCRequest $request): Response
    {
        $validData = $request->validated();
        $pc = PC::create($validData);
        return response($pc, Response::HTTP_CREATED);
    }

    /**
     * Regresa la lista de pc almacenadas en la base de datos.
     * @return Response cuerpo de la respuesta.
     */
    public function index(): Response
    {
        return response(PC::all(), Response::HTTP_OK);
    }

    /**
     * Actualiza la información de una pc.
     * @param PCRequest $request cuerpo de la petición
     * @param int $id ID de la PC.
     * @return Response cuerpo de la respuesta.
     */
    public function update(PCRequest $request, int $id): Response
    {
        $pc = PC::find($id);
        $validData = $request->validated();
        $pc->update($validData);
        return response($pc, Response::HTTP_OK);
    }

    /**
     * Obtiene la información de una pc por ID
     * @param int $id ID de una PC.
     * @return Response cuerpo de la respuesta.
     */
    public function show(int $id): Response {
        return response(PC::find($id), Response::HTTP_OK);
    }
}

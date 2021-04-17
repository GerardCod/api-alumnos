<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramaRequest;
use App\Models\Programa;
use Illuminate\Http\Response;

class ProgramaController extends Controller
{
    /**
     * Crea un programa en la base de datos.
     * @param ProgramaRequest $request cuerpo de la petición.
     * @return Response cuerpo de la respuesta.
     */
    public function store(ProgramaRequest $request): Response {
        $validData = $request->validated();
        $program = Programa::create($validData);
        return response($program, Response::HTTP_CREATED);
    }

    /**
     * Regresa el listado de programas almacenados en la base de datos.
     * @return Response cuerpo de la respuesta.
     */
    public function index(): Response {
        return response(Programa::all(), Response::HTTP_OK);
    }

    /**
     * Actualiza un programa.
     * @param ProgramaRequest $request cuerpo de la petición
     * @param int $id ID del programa.
     * @return Response cuerpo de la respuesta.
     */
    public function update(ProgramaRequest $request, int $id): Response {
        $validData = $request->validated();
        $program = Programa::find($id);
        $program->update($validData);
        return response($program, Response::HTTP_OK);
    }

    /**
     * Regresa la información de un programa.
     * @param int $id ID del programa.
     * @return Response cuerpo de la respuesta.
     */
    public function show(int $id): Response {
        $programa = Programa::find($id);
        return response($programa, Response::HTTP_OK);
    }

}

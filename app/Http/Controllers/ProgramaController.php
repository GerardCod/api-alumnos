<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramaRequest;
use App\Models\Programa;
use Illuminate\Http\Request;
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
}

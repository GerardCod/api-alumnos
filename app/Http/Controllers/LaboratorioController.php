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
}

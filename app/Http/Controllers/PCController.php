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
    public function store(PCRequest $request): Response {
        $validData = $request->validated();
        $pc = PC::create($validData);
        return response($pc, Response::HTTP_CREATED);
    }
}

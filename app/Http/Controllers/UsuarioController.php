<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearUsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsuarioController extends Controller
{
    /**
     * Crea un nuevo usuario.
     * @param CrearUsuarioRequest $request cuerpo de la petición.
     * @return Response cuerpo de la respuesta.
     */
    public function store(CrearUsuarioRequest $request): Response {
        $validData = $request->validated();
        Usuario::create($validData);
        return response($validData, Response::HTTP_CREATED);
    }
}

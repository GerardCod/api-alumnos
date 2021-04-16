<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarUsuarioRequest;
use App\Http\Requests\CrearUsuarioRequest;
use App\Models\Usuario;
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

    /**
     * Actualiza un usuario.
     * @param ActualizarUsuarioRequest $request cuerpo de la petición
     * @param string $matricula matricula del usuario
     * @return Response cuerpo de la respuesta.
     */
    public function update(ActualizarUsuarioRequest $request, string $matricula): Response {
        $validData = $request->validated();
        $users = Usuario::query()->where('matricula', '=', $matricula)->get();
        $user = $users[0];
        $user->update($validData);
        return response($user, Response::HTTP_OK);
    }
}

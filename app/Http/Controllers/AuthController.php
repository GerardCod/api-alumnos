<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Usuario;
use Illuminate\Http\Response;

class AuthController extends Controller
{

    /**
     * Realiza la autenticación de un usuario.
     * @param LoginRequest $request cuerpo de la petición.
     * @return Response cuerpo de la respuesta.
     */
    public function login(LoginRequest $request): Response {
        $data = $request->validated();
        $users = Usuario::query()->where('matricula', '=', $data['matricula'])->get();
        if (count($users) == 0) {
            return response(['mensaje' => 'El usuario con la matricula '.$data['matricula'].' no existe'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $token = $users[0]->createToken('access_token');
        return response(['access_token' => $token->plainTextToken], Response::HTTP_CREATED);
    }

}

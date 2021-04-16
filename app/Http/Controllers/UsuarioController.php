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
     * @param int $id ID del usuario
     * @return Response cuerpo de la respuesta.
     */
    public function update(ActualizarUsuarioRequest $request, int $id): Response {
        $validData = $request->validated();
        $user = Usuario::find($id);
        $user->update($validData);
        return response($user, Response::HTTP_OK);
    }

    /**
     * Regresa la lista de usuarios almacenados en la base de datos.
     * @return Response cuerpo de la respuesta.
     */
    public function index(): Response {
        $users = Usuario::with('rol', 'carrera')->get();
        return response($users, Response::HTTP_OK);
    }

    /**
     * Regresa la información de un usuario por id.
     * @param int $id Id del usuario.
     * @return Response cuerpo de la respuesta.
     */
    public function show(int $id): Response {
        $user = Usuario::with(['rol', 'carrera'])->where('id','=',$id)->get()[0];
        return response($user, Response::HTTP_OK);
    }


    /**
     * Elimina un usuario de la base de datos.
     * @param int $id ID del usuario.
     * @return Response cuerpo de la respuesta.
     */
    public function destroy(int $id): Response {
        $rowsAffected = Usuario::destroy($id);
        if ($rowsAffected > 0) {
            return response(['mensaje' => 'Eliminación del usuario exitosa'], Response::HTTP_OK);
        }
        return response(['mensaje' => 'No se pudo borrar al usuario'], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RolController extends Controller
{
    /**
     * Regresa la lista de roles guardados en la base de datos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        //
        return response(Rol::all(), Response::HTTP_OK);
    }
}

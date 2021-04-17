<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Response;

class EventoController extends Controller
{
    /**
     * Regresa la lista de eventos almacenados en la base de datos.
     * @return Response cuerpo de la respuesta.
     */
    public function index(): Response
    {
        $events = Evento::with('pc','laboratorio', 'usuario', 'programa')->get();
        return response($events, Response::HTTP_OK);
    }
}

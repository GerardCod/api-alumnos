<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventoController extends Controller
{
    /**
     * Regresa la lista de eventos almacenados en la base de datos.
     * @return Response cuerpo de la respuesta.
     */
    public function index(Request $request): Response
    {
        $begin = $request->query('begin', '');
        $end = $request->query('end', '');
        $events = [];
        if (strcmp($begin, '') && strcmp($end, '')) {
            $events = Evento::with('pc','laboratorio', 'usuario', 'programa')
                ->whereBetween('created_at', [$begin, $end])->get();
        } else {
            $events = Evento::with('pc', 'laboratorio', 'usuario', 'programa')->get();
        }
        return response($events, Response::HTTP_OK);
    }
}

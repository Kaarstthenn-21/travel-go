<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Comment;

class TripController extends Controller
{
    public function search(Request $request)
    {
        // Validar la entrada del usuario
        $validated = $request->validate([
            'from' => 'nullable|string|max:255',
            'to' => 'nullable|string|max:255',
        ], [
            'from.string' => 'El campo de origen debe ser una cadena de texto.',
            'from.max' => 'El campo de origen no debe exceder los 255 caracteres.',
            'to.string' => 'El campo de destino debe ser una cadena de texto.',
            'to.max' => 'El campo de destino no debe exceder los 255 caracteres.',
        ]);

        $from = $validated['from'] ?? null;
        $to = $validated['to'] ?? null;

        $trips = Trip::query();

        if ($from) {
            $trips->where('from', 'LIKE', "%{$from}%");
        }

        if ($to) {
            $trips->where('to', 'LIKE', "%{$to}%");
        }

        $trips = $trips->get();

        return view('reserves.search-results', compact('trips', 'from', 'to'));
    }

    // Método mostrar para obtener el vuelo y sus especificaciones
    public function show(Trip $trip)
    {
        $comments = Comment::where('trip_id', $trip->id)->with('user', 'replies.user')->get();
        $tripId = $trip->id; // Asigna $tripId para su uso en la vista

        return view('reserves.trip-details', compact('trip', 'tripId', 'comments'));
    }
}

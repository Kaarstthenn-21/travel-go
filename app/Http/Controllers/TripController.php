<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Comment;

class TripController extends Controller
{
    public function search(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');

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
    //Metodo mostrar para obtener el vuelo y su especificaciones
    public function show(Trip $trip)
{
    $comments = Comment::where('trip_id', $trip->id)->with('user', 'replies.user')->get();
    $tripId = $trip->id; // Asigna $tripId para su uso en la vista

    return view('reserves.trip-details', compact('trip', 'tripId', 'comments'));
}
}

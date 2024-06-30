<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validación de datos del formulario
        $validatedData = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'guests' => 'required|integer|min:1',
        ]);

        // Crear una nueva reserva en la base de datos
        $reservation = new Reservation();
        $reservation->start_date = $validatedData['start_date'];
        $reservation->end_date = $validatedData['end_date'];
        $reservation->guests = $validatedData['guests'];
        $reservation->trip_id = $request->trip_id; // Asegúrate de pasar el ID del viaje desde el formulario
        $reservation->save();

        // Redirigir o responder según sea necesario
        return redirect()->back()->with('success', 'Reserva realizada correctamente.');
    }
}
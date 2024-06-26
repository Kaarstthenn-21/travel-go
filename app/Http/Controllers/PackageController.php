<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function createPackage(Request $request)
    {
        // Valida y procesa los datos del formulario
        $validatedData = $request->validate([
            'departure' => 'required|string',
            'destination' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'guests' => 'required|string',
        ],[
            'departure.required' => 'El campo de salida es obligatorio.',
            'departure.string' => 'El campo de salida debe ser una cadena de texto.',
            'departure.max' => 'El campo de salida no debe exceder los 255 caracteres.',
            'destination.required' => 'El campo de destino es obligatorio.',
            'destination.string' => 'El campo de destino debe ser una cadena de texto.',
            'destination.max' => 'El campo de destino no debe exceder los 255 caracteres.',
            'start_date.required' => 'La fecha de inicio es obligatoria.',
            'start_date.date' => 'La fecha de inicio debe ser una fecha válida.',
            'start_date.after_or_equal' => 'La fecha de inicio debe ser hoy o una fecha posterior.',
            'end_date.required' => 'La fecha de finalización es obligatoria.',
            'end_date.date' => 'La fecha de finalización debe ser una fecha válida.',
            'end_date.after' => 'La fecha de finalización debe ser posterior a la fecha de inicio.',
            'guests.required' => 'El número de huéspedes es obligatorio.',
            'guests.integer' => 'El número de huéspedes debe ser un número entero.',
            'guests.min' => 'El número de huéspedes debe ser al menos 1.',
            'guests.max' => 'El número de huéspedes no debe exceder de 10.',
        ]);

        // Almacena los datos en la sesión
        $request->session()->put('departure', $validatedData['departure']);
        $request->session()->put('destination', $validatedData['destination']);
        $request->session()->put('start_date', $validatedData['start_date']);
        $request->session()->put('end_date', $validatedData['end_date']);
        $request->session()->put('guests', $validatedData['guests']);

        // Redirecciona a la página de pago
        return redirect()->route('payment.page');
    }

}

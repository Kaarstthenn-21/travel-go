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

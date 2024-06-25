<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage(Request $request)
    {
        // Aquí puedes obtener los detalles del paquete desde la sesión o la base de datos
        $packageDetails = [
            'departure' => $request->session()->get('departure'),
            'destination' => $request->session()->get('destination'),
            'start_date' => $request->session()->get('start_date'),
            'end_date' => $request->session()->get('end_date'),
            'guests' => $request->session()->get('guests'),
        ];

        return view('payment', ['packageDetails' => $packageDetails]);
    }

    public function showCardPage()
    {
        return view('card_payment');
    }

    public function processPayment(Request $request)
    {
        // Lógica para procesar el pago con los datos de la tarjeta
        // ...

        return redirect()->route('payment.success');
    }
}

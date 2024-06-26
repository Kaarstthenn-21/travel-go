<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
    public function showPaymentPage(Request $request)
    {
        // Obtener detalles del paquete desde la sesión o la base de datos
        $packageDetails = [
            'departure' => $request->session()->get('departure'),
            'destination' => $request->session()->get('destination'),
            'start_date' => $request->session()->get('start_date'),
            'end_date' => $request->session()->get('end_date'),
            'guests' => $request->session()->get('guests'),
        ];

        // Crear un PaymentIntent en Stripe y obtener el client_secret
        $intent = $this->createPaymentIntent();
        $clientSecret = $intent->client_secret;

        return view('payment', [
            'packageDetails' => $packageDetails,
            'clientSecret' => $clientSecret, // Pasar client_secret a la vista
        ]);
    }

    public function showCardPage()
    {
        return view('card_payment');
    }

    public function processPayment(Request $request)
    {
        // Lógica para procesar el pago con los datos de la tarjeta
        // Aquí puedes acceder a los detalles del paquete desde la sesión o la base de datos
        $packageDetails = [
            'departure' => $request->session()->get('departure'),
            'destination' => $request->session()->get('destination'),
            'start_date' => $request->session()->get('start_date'),
            'end_date' => $request->session()->get('end_date'),
            'guests' => $request->session()->get('guests'),
        ];

        // Puedes agregar aquí la lógica para registrar la transacción en tu base de datos, etc.

        // Redirigir a la vista de pago exitoso con los detalles del paquete
        return view('payment_success', ['packageDetails' => $packageDetails]);
    }

    // Método para crear un PaymentIntent en Stripe
    private function createPaymentIntent()
    {
        // Configurar Stripe con tu clave secreta
        Stripe::setApiKey(config('services.stripe.secret'));

        // Crear un PaymentIntent en Stripe
        $intent = PaymentIntent::create([
            'amount' => 1000,  // Monto en centavos (ejemplo)
            'currency' => 'usd',
        ]);

        return $intent;
    }
}

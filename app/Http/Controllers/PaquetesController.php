<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaquetesController extends Controller
{
    public function index()
    {
        return view('Paquetes.index');
    }

    public function reserva_view()
    {
        return view('Paquetes.reserva',['activeTab'=>'informacion']);
    }
    public function showTab($tab = 'informacion')
    {
        return view('Paquetes.reserva', ['activeTab' => $tab]);
    }
    public function galeria()
{
    $images = [
        ['src' => 'ruta-a-la-imagen1', 'alt' => 'Descripción de la imagen 1'],
        ['src' => 'ruta-a-la-imagen2', 'alt' => 'Descripción de la imagen 2'],
        ['src' => 'ruta-a-la-imagen3', 'alt' => 'Descripción de la imagen 3'],
        // Agrega más imágenes según necesites
    ];

    return view('reserva.index', compact('images'));
}
}

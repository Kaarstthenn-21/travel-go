<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        // Inicializa la consulta de hoteles
        $query = Hotel::query();

        // Aplica filtros si existen en la solicitud
        if ($request->has('destination')) {
            $destination = $request->input('destination');
            $query->where('destination', 'like', "%$destination%");
        }

        if ($request->has('min_price')) {
            $minPrice = $request->input('min_price');
            $query->where('price', '>=', $minPrice);
        }

        if ($request->has('max_price')) {
            $maxPrice = $request->input('max_price');
            $query->where('price', '<=', $maxPrice);
        }

        // Ejecuta la consulta final
        $hotels = $query->get();

        return view('hotels.index', compact('hotels'));
    }

    public function show($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotels.show', compact('hotel'));
    }
    
    public function showRooms(Hotel $hotel)
    {
        $rooms = $hotel->rooms()->where('available', true)->get();
        return view('hotels.rooms', compact('hotel', 'rooms'));
    }
}

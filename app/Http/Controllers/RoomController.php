<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index($hotelId)
    {
        // Obtener las habitaciones con imagen para un hotel específico
        $rooms = Room::where('hotel_id', $hotelId)
                     ->where('available', true)
                     ->whereNotNull('image_url') // Solo habitaciones con imagen definida
                     ->get();
        
        return view('rooms.index', compact('rooms'));
    }
}

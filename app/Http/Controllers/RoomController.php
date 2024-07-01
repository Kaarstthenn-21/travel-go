<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index($hotelId)
    {
        $rooms = Room::where('hotel_id', $hotelId)
                     ->where('available', true)
                     ->get();
        
        return view('rooms.index', compact('rooms'));
    }
}

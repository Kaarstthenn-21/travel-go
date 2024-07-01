<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelAdminController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('admin.hotels.index', compact('hotels'));
    }

    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id);
        $rooms = $hotel->rooms()->get(); // Obtener todas las habitaciones del hotel
        return view('admin.hotels.edit', compact('hotel', 'rooms'));
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);

        // Actualizar información del hotel
        $hotel->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_url' => $request->image_url,
        ]);

        // Actualizar habitaciones existentes asociadas al hotel
        if (isset($request->rooms) && is_array($request->rooms)) {
            foreach ($request->rooms as $roomId => $roomData) {
                $room = Room::findOrFail($roomId);
                $room->update([
                    'type' => $roomData['type'],
                    'beds' => $roomData['beds'],
                    'tv' => isset($roomData['tv']) ? true : false,
                    'bathrooms' => $roomData['bathrooms'],
                    'available' => isset($roomData['available']) ? true : false,
                ]);
            }
        }

        // Crear nuevas habitaciones asociadas al hotel
        if (isset($request->new_rooms) && is_array($request->new_rooms)) {
            foreach ($request->new_rooms as $newRoomData) {
                // Crear nueva habitación y asignar al hotel actual
                $hotel->rooms()->create([
                    'type' => $newRoomData['type'],
                    'beds' => $newRoomData['beds'],
                    'tv' => isset($newRoomData['tv']) ? true : false,
                    'bathrooms' => $newRoomData['bathrooms'],
                    'available' => isset($newRoomData['available']) ? true : false,
                ]);
            }
        }

        return redirect()->route('admin.hotels.index')->with('success', 'Hotel y habitaciones actualizados correctamente.');
    }

    public function create()
        {
            return view('admin.hotels.create');
        }

    public function store(Request $request)
        {
            // Validación de los datos recibidos del formulario
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'image_url' => 'required|url', // Asegúrate de validar que sea una URL válida
            ]);

            // Creación del nuevo hotel con los datos validados
            $hotel = new Hotel();
            $hotel->name = $validatedData['name'];
            $hotel->description = $validatedData['description'];
            $hotel->price = $validatedData['price'];
            $hotel->image_url = $validatedData['image_url']; 
            // Guardar el hotel en la base de datos
            $hotel->save();

            // Redireccionar a la vista de lista de hoteles o mostrar un mensaje de éxito
            return redirect()->route('admin.hotels.index')->with('success', 'Hotel creado exitosamente.');
        }

    public function destroyRoom($hotelId, $roomId)
        {
            $room = Room::findOrFail($roomId);
            $room->delete();

            return back()->with('success', 'Habitación eliminada correctamente.');
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;
use Carbon\Carbon;
class PaquetesController extends Controller
{
    public function index(Request $request)
    {
        $sortBy = $request->query('sort', 'fecha'); // Ordenar por fecha si no se especifica otro
        
        // Obtener paquetes ordenados según $sortBy
        if ($sortBy === 'precio_mayor') {
            $paquetes = Paquete::orderByDesc('precio')->get();
        } elseif ($sortBy === 'precio_menor') {
            $paquetes = Paquete::orderBy('precio')->get();
        } elseif ($sortBy === 'nombre') {
            $paquetes = Paquete::orderBy('nombre')->get();
        } else {
            $paquetes = Paquete::orderBy('created_at', 'desc')->get(); // Orden por defecto (fecha)
        }
        
        return view('Paquetes.index', compact('paquetes'));
    }

    public function reserva_view($id)
    {
        $paquete = Paquete::with(['vuelo', 'hotel'])->findOrFail($id);
        $paquete->vuelo->start_date = Carbon::parse($paquete->vuelo->start_date);
        $paquete->vuelo->end_date = Carbon::parse($paquete->vuelo->end_date);
        return view('Paquetes.reserva', ['activeTab' => 'informacion', 'paquete' => $paquete]);
    }
    
    public function showTab($id, $tab = 'informacion')
    {
        $paquete = Paquete::with(['vuelo', 'hotel'])->findOrFail($id);
        $paquete->vuelo->start_date = Carbon::parse($paquete->vuelo->start_date);
        $paquete->vuelo->end_date = Carbon::parse($paquete->vuelo->end_date);
        return view('Paquetes.reserva', ['activeTab' => $tab, 'paquete' => $paquete]);
    }
}

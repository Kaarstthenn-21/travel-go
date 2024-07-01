<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;
use Carbon\Carbon;
use App\Helpers\MinHeap;
use App\Helpers\MaxHeap;
use App\Helpers\BinarySearchTree;
class PaquetesController extends Controller
{
    public function index(Request $request)
    {
        $sortBy = $request->query('sort', 'fecha'); // Ordenar por fecha si no se especifica otro
        $paquetes = Paquete::all();
        $sortedPaquetes = [];

        if ($sortBy === 'precio_mayor') {
            $heap = new MaxHeap();
            foreach ($paquetes as $paquete) {
                $heap->insert($paquete);
            }
            $sortedPaquetes = $heap->getSortedData();
        } elseif ($sortBy === 'precio_menor') {
            $heap = new MinHeap();
            foreach ($paquetes as $paquete) {
                $heap->insert($paquete);
            }
            $sortedPaquetes = $heap->getSortedData();
        } elseif ($sortBy === 'nombre') {
            $compareFunction = function ($a, $b) {
                return strcmp($a->nombre, $b->nombre);
            };
            $tree = new BinarySearchTree($compareFunction);
            foreach ($paquetes as $paquete) {
                $tree->insert($paquete);
            }
            $sortedPaquetes = $tree->getSortedData();
        } elseif ($sortBy === 'fecha') {
            $compareFunction = function ($a, $b) {
                return $a->created_at <=> $b->created_at;
            };
            $tree = new BinarySearchTree($compareFunction);
            foreach ($paquetes as $paquete) {
                $tree->insert($paquete);
            }
            $sortedPaquetes = $tree->getSortedData();
        } else {
            $sortedPaquetes = $paquetes;
        }
        
        return view('Paquetes.index', compact('sortedPaquetes'));
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
    public function search(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'destino' => 'nullable|alpha', // Solo letras, puede ser nulo
            'fecha' => 'nullable|date|after_or_equal:today|before:' . date('Y-m-d', strtotime('+1 year')), // Fecha válida, no menor a la actual, no mayor a un año
            'precio' => 'nullable|numeric', // Puede ser nulo, solo números
        ], [
            'destino.alpha' => 'El destino solo puede contener letras.',
            'fecha.date' => 'La fecha ingresada no es válida.',
            'fecha.after_or_equal' => 'La fecha debe ser igual o posterior a la fecha actual.',
            'fecha.before' => 'La fecha debe ser menor a un año a partir de la fecha actual.',
            'precio.numeric' => 'El precio debe ser un número.',
        ]);
    
        // Obtener los paquetes de la base de datos
        $sortedPaquetes = Paquete::query();
    
        // Aplicar filtros según los criterios de búsqueda
        if ($validatedData['destino']) {
            $sortedPaquetes->where('nombre', 'like', '%' . $validatedData['destino'] . '%'); // Búsqueda parcial por nombre
        }
    
        if ($validatedData['fecha']) {
            $fechaFin = date('Y-m-d', strtotime('+1 week', strtotime($validatedData['fecha']))); // Fecha final una semana después
            $sortedPaquetes->whereBetween('fecha_salida', [$validatedData['fecha'], $fechaFin]); // Buscar entre fechas
        }
    
        if ($validatedData['precio']) {
            $sortedPaquetes->where('precio', '<=', $validatedData['precio']); // Precio menor o igual al ingresado
        }
    
        // Obtener los resultados
        $sortedPaquetes = $sortedPaquetes->get();
    
        // Pasar los resultados a la vista con el formulario
        return view('paquetes.index', compact('sortedPaquetes'));
    }
    
    
}

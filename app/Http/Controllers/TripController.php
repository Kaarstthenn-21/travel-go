<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function search(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');

        $trips = Trip::query();

        if ($from) {
            $trips->where('from', 'LIKE', "%{$from}%");
        }

        if ($to) {
            $trips->where('to', 'LIKE', "%{$to}%");
        }

        $trips = $trips->get();

        return view('reserves.search-results', compact('trips', 'from', 'to'));
    }
}
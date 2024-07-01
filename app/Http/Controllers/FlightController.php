<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FlightController extends Controller
{
    public function showFlightsPage()
    {
        return view('flights'); 
    }
    public function getFlights()
    {
        $flightsPath = storage_path('app/flights.json');
        $flightDatesPath = storage_path('app/flight_dates.json');

        if (!file_exists($flightsPath) || !file_exists($flightDatesPath)) {
            return response()->json(['error' => 'Flights or flight dates file not found.'], 404);
        }

        $flights = json_decode(file_get_contents($flightsPath), true);
        $flightDates = json_decode(file_get_contents($flightDatesPath), true);

        
        foreach ($flights as &$flight) {
            $flight['departure_times'] = [];
            foreach ($flightDates as $dates) {
                if ($dates['flight_id'] == $flight['flight_id']) {
                    $flight['departure_times'] = $dates['departure_times'];
                    break;
                }
            }
        }

        return response()->json($flights);
    }

    public function getFlightDates($id)
    {
        $flightDatesPath = storage_path('app/flight_dates.json');

        if (!file_exists($flightDatesPath)) {
            return response()->json(['error' => 'Flight dates file not found.'], 404);
        }

        $flightDates = json_decode(file_get_contents($flightDatesPath), true);

        foreach ($flightDates as $dates) {
            if ($dates['flight_id'] == $id) {
                return response()->json($dates['departure_times']);
            }
        }

        return response()->json(['error' => 'No dates found for this flight.'], 404);
    }
}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/trips.css') }}" rel="stylesheet">
    <link href="{{ asset('js/trip.js') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=bakbak-one:400|braah-one:400|carattere:400" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4f61daaf70.js" crossorigin="anonymous"></script>
    <title>{{ config('app.name', 'TravelGo') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.0.6/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles') 
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-white bg-opacity-95">
        <main>
            {{ $slot }}
        </main>
        @include('layouts.footer')
    </div>
    <!-- Agrega jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Agrega el plugin datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/trip.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
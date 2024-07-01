<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaquetesController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TripController;

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CommentController;
///hoteles
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HotelAdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController; // Ajusta el controlador según tus necesidades

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/paquetes', [PaquetesController::class, 'index'])->name('paquetes.index');

Route::get('paquetes/reserva/{id}', [PaquetesController::class, 'reserva_view'])->name('Paquetes.reserva');
Route::get('paquetes/reserva/{id}/{tab?}', [PaquetesController::class, 'showTab'])->name('Paquetes.showTab');
Route::get('/paquetes/reserva/informacion', [PaquetesController::class, 'reserva_view'])->name('Paquetes.reserva');
Route::get('/Paquetes/reserva/{tab}', [PaquetesController::class, 'showTab'])->name('reserva.tab');
Route::get('/paquetes/search', [PaquetesController::class, 'search'])->name('paquetes.search');


Route::get('/flights', [FlightController::class, 'showFlightsPage']);
Route::get('/flights/{id}/dates', [FlightController::class, 'getFlightDates']);
///Hoteles//
Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotels.show');
Route::get('/hotels/{hotel}/rooms', [HotelController::class, 'showRooms'])->name('hotels.rooms');

//pagina del admin//
// Middleware de autenticación y administración
Route::middleware(['auth'])->group(function () {
    Route::middleware(\App\Http\Middleware\AdminMiddleware::class)->prefix('admin')->group(function () {
        
        // Ruta para el panel de administración
        Route::get('panel', [AdminController::class, 'index'])->name('admin.panel');

        // Rutas para la gestión de hoteles
        Route::get('hotels', [HotelAdminController::class, 'index'])->name('admin.hotels.index');
        Route::get('hotels/create', [HotelAdminController::class, 'create'])->name('admin.hotels.create');
        Route::post('hotels', [HotelAdminController::class, 'store'])->name('admin.hotels.store');
        Route::get('hotels/{hotel}/edit', [HotelAdminController::class, 'edit'])->name('admin.hotels.edit');
        Route::put('hotels/{hotel}', [HotelAdminController::class, 'update'])->name('admin.hotels.update');
        Route::delete('hotels/{hotel}', [HotelAdminController::class, 'destroy'])->name('admin.hotels.destroy');
        Route::delete('hotels/{hotel}/rooms/{room}', [HotelAdminController::class, 'destroyRoom'])->name('admin.hotels.rooms.destroy');
        // Ruta para actualizar la información del hotel en HotelAdminController
        Route::put('admin/hotels/{hotel}', [HotelAdminController::class, 'update'])->name('admin.hotels.update');
        // Ruta para actualizar las habitaciones del hotel en HotelAdminController
        Route::put('admin/hotels/{hotel}/rooms', [HotelAdminController::class, 'updateRooms'])->name('admin.hotels.rooms.update');
        // Ruta para eliminar una habitación en HotelAdminController
        Route::delete('admin/hotels/{hotel}/rooms/{room}', [HotelAdminController::class, 'destroyRoom'])->name('admin.hotels.rooms.destroy');


    });
});
//-----//

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Para el perfil del usuario
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/create-package', [PackageController::class, 'createPackage'])->name('create.package');
Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment.page');
Route::get('/pago/tarjeta', [PaymentController::class, 'showCardPage'])->name('payment.card');
Route::post('/pago/procesar', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/pago/exito', function() {
    return 'Pago exitoso'; // Define una vista adecuada para el éxito del pago
})->name('payment.success');
// Ruta para la pagina de reservas

Route::get('/search', [TripController::class, 'search'])->name('trips.search');
Route::get('/flight-reservation', function () {
    return view('reserves.flight-reservation');
})->name('flight-reservation');

//Mostrar los detalles del vuelo
Route::get('/reserves/{trip}', [TripController::class, 'show'])->name('trips.show');

//Ruta para Comentarios
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/comments/{comment}/like', [CommentController::class, 'like']);
Route::post('/comments/{comment}/dislike', [CommentController::class, 'dislike']);
Route::post('/comments/reply', [CommentController::class, 'reply'])->name('comments.reply');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');

//Ruta para el almacenamiento de las reservas generadas
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

require __DIR__ . '/auth.php';
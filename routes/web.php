<?php

use App\Http\Controllers\SeatController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Buy');
});


Route::get('/check', function(){
    return view('check');
});


//home
Route::get('/home', [TripController::class, 'index'])->name('home');

//Trip Manage
Route::get('/trips', [TripController::class, 'trips'])->name('trips');
Route::get('/trip_manage_form', [TripController::class, 'trip_form'])->name('trip_form');
Route::post('/trip_manage_form_store', [TripController::class, 'trip_form_store'])->name('trip_form_store');
Route::get('/delete_trip/{id}', [TripController::class, 'delete_trip'])->name('delete_trip');

//Check Tickets
Route::get('/check_form',[TripController::class, 'check_form'])->name('check_form');
Route::post('/check_seat_f',[TripController::class, 'check_seat'])->name('check_seat');
//Route::get('/avaiable_trips', [TripController::class, 'check_results'])->name('check_results');


//Show Seats
//Route::get('/buy_ticket',[TripController::class, 'index'])->name('buy_index');
Route::get('/buy/{id}',[TripController::class, 'buy_ticket'])->name('buy_ticket');
Route::post('/buy_tickets',[TripController::class, 'buy_ticket_store'])->name('buy_ticket_store');


//details
Route::get('/details', [TripController::class, 'details'])->name('details');

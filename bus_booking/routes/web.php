<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


route::get('/', [AdminController::class, 'home']);


//Admin Route
route::get('/home', [AdminController::class, 'index'])->name('home');
route::get('/create_bus', [AdminController::class, 'create_bus']);
route::post('/add_bus', [AdminController::class, 'add_bus']);
route::get('/view_bus', [AdminController::class, 'view_bus']);
route::get('/bus_delete/{id}', [AdminController::class, 'bus_delete']);
route::get('/bus_update/{id}', [AdminController::class, 'bus_update']);
route::post('/edit_bus/{id}', [AdminController::class, 'edit_bus']);
route::get('/bus_details/{id}', [HomeController::class, 'bus_details']);
route::get('/book_now/{id}', [HomeController::class, 'book_now']);
route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);
route::get('/bookings', [AdminController::class, 'bookings']);
route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking']);
route::get('/approve_book/{id}', [AdminController::class, 'approve_book']);
route::get('/reject_book/{id}', [AdminController::class, 'reject_book']);
route::get('/view_gallary', [AdminController::class, 'view_gallary']);
route::post('/upload_gallery', [AdminController::class, 'upload_gallery']);
route::get('/delete_gallary/{id}', [AdminController::class, 'delete_gallary']);
route::post('/contact', [HomeController::class, 'contact']);
route::get('/all_messages', [AdminController::class, 'all_messages']);
route::get('/send_mail/{id}', [AdminController::class, 'send_mail']);
route::post('/mail/{id}', [AdminController::class, 'mail']);

route::get('/our_buses', [HomeController::class, 'our_buses']);
route::get('/bus_gallary', [HomeController::class, 'bus_gallary']);
route::get('/contact_us', [HomeController::class, 'contact_us']);
// route::get('/our_buses', [HomeController::class, 'our_buses']);
// route::get('/our_buses', [HomeController::class, 'our_buses']);
// route::get('/our_buses', [HomeController::class, 'our_buses']);






//taken seat numbers
// Route::get('/get_taken_seats', [HomeController::class, 'get_taken_seats']);
route::get('/get-taken-seats', [HomeController::class, 'getTakenSeats']);






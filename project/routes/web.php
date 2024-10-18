<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UsersReservationsController;
use Illuminate\Support\Facades\Route;

///front
Route::controller(FrontController::class)->name('front.')->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'contactStore')->name('contact.store');
    Route::get('/destination', 'destination')->name('destination');
    Route::get('single/{id}', 'singledestination')->name('single.destination');
 
    Route::get('reservation/{id}' , 'reservation')->name('reservation.store');
    Route::resource('reservation' , ReservationController::class)->only('index' , 'destroy');
   
    Route::post('subscribe/store', 'store')->name('subscriber.store');
});

require __DIR__ . '/auth.php';



///Admin
Route::prefix('/admin')->name('admin.')->group(function () {
    
    Route::middleware('admin')->group(function () {
        //index
        Route::view('/', 'admindashboard/index')->name('dashboard');
        Route::resource('about', AboutController::class)->only('index' , 'edit' ,'update');
        //users reservations
        Route::get('/userresrvations',[ UsersReservationsController::class,'userreservations'])
        ->name('userresrvations.table');
        

        //destinations
        Route::resource('destination', DestinationController::class)->except('show');
        //guides
        Route::resource('guide', GuideController::class)->except('show');


        //contact
        Route::controller(BackController::class)->group(function () {
            Route::get('/contact', 'contact')->name('contact.table');
        });

    });
    require __DIR__ . '/adminAuth.php';

}); 



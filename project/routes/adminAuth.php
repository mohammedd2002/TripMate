<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\adminAuth\AuthenticatedSessionController;





// Route::middleware('guest')->group(function () {

//     Route::get('login', [AuthAdminController::class, 'create'])->name('login');

//     Route::post('login', [AuthAdminController::class, 'store']);
// });

// Route::middleware('auth:admin')->group(function () {
//     Route::get('/admin/dashboard', [BackController::class, 'index'])->name('admin.dashboard');
//     Route::post('admin/logout', [AuthAdminController::class, 'destroy'])
//         ->name('admin.logout');
// });

Route::middleware('guest:admin')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});




Route::middleware('admin')->group(function () {

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ScheduleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::name('admin.')
        ->controller(AuthenticatedSessionController::class)
        ->group(function () {
            Route::get('login','create')->name('create')->middleware('guest:admin');
            Route::post('login','store')->name('store')->middleware('guest:admin');
            Route::post('logiout','destroy')->name('destroy')->middleware('auth:admin');
        });

        Route::prefix('schedules')
        ->name('schedule.')
        ->middleware('auth:admin')
        ->controller(BookController::class)
        ->group(function () {
            Route::get('','index')->name('index');
        });
    });
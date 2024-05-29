<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\ReservationController;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', HomeController::class)->name('dashboard');

    Route::resource('structure', StructureController::class);

    Route::resource('equipment', EquipmentController::class);
    Route::resource('room', RoomController::class);
    Route::resource('reservation', ReservationController::class);
    Route::resource('condition', ConditionController::class);

    Route::post('/gallery-room', [RoomController::class, 'addImage'])->name('gallery.room.store');
    Route::delete('/gallery-room/{image}', [RoomController::class, 'destroyImage'])->name('gallery.room.destroy');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');

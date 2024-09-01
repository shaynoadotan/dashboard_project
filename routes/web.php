<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;




Route::get('/', function () {
    return redirect('/login');
});

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login')->withoutMiddleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/messages', [MessageController::class, 'getMessages'])->middleware('auth');


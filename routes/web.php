<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    echo "About Us";
});

Route::get('/main/{value}', [MainController::class, 'index']);
Route::get('/page2/{value}', [MainController::class, 'page2']);
Route::get('/page3/{value}', [MainController::class, 'page3']);

// Rotas do aplicativo Notes.
Route::get('/login', [AuthController::class, 'login']); // Rota para login.
Route::get('/logout', [AuthController::class, 'logout']); // Rota para logout.

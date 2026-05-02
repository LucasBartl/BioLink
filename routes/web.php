<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Criamos um grupo de rotas que não necessitam estar autenticadas (Guests) */
Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

/* Criamos um grupo de rotas que necessitam estar autenticadas (auth) */
Route::middleware('auth')->group(function () {

    /* Rota dashboard */
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    /* Rota de logout */
    Route::get('/logout', LogoutController::class)->name('logout');

    /* Rota de links */
    Route::get('/links/create', [LinkController::class, 'create'])->name('links.create');
    Route::post('/links/create', [LinkController::class, 'store']);
    Route::get('/links/{link}/edit', [LinkController::class, 'edit'])->name('links.edit');
    Route::put('/links/{link}/edit', [LinkController::class, 'update']);
    Route::delete('/links/{link}', [LinkController::class, 'destroy'])->name('links.destroy');

    Route::patch('/links/{link}/up', [LinkController::class, 'up'])->name('links.up');
    Route::patch('/links/{link}/down', [LinkController::class, 'down'])->name('links.down');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;

// Menu Routes
Route::get('/menu', [MenuController::class, 'index']);
Route::post('/menu', [MenuController::class, 'store']); // optional
Route::post('/menu/seed', [MenuController::class, 'seedMenu']); // ✅ auto-seed

// Order Routes
Route::get('/orders', [OrderController::class, 'index']);

// ✅ place order
Route::post('/orders', [OrderController::class, 'store'])
     ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

Route::patch('/orders/{id}', [OrderController::class, 'update'])
         ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

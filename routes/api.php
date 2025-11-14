<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\Api\AuthController;

// AUTH
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

// MOBIL CRUD
Route::get('/mobils',        [MobilController::class, 'index']);
Route::post('/mobils',       [MobilController::class, 'store']);
Route::get('/mobils/{id}',   [MobilController::class, 'show']);
Route::put('/mobils/{id}',   [MobilController::class, 'update']);
Route::delete('/mobils/{id}',[MobilController::class, 'destroy']);

// PENYEWA CRUD
Route::get('/penyewas',        [PenyewaController::class, 'index']);
Route::post('/penyewas',       [PenyewaController::class, 'store']);
Route::get('/penyewas/{id}',   [PenyewaController::class, 'show']);
Route::put('/penyewas/{id}',   [PenyewaController::class, 'update']);
Route::delete('/penyewas/{id}',[PenyewaController::class, 'destroy']);

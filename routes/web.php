<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VillamosController;

Route::get('/', [VillamosController::class, 'Mainpage']);
Route::get('/jaratok', [VillamosController::class, 'Jaratok']);
Route::get('/jarat/{id}', [VillamosController::class, 'Jarat']);
Route::get('/megallo/{id}',[VillamosController::class, 'Megallo']);
Route::view('/kereses', 'kereses');
Route::post('/kereses', [VillamosController::class, 'Kereses']);

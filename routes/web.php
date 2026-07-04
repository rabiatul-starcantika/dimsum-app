<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DimsumController;

Route::get('/', [DimsumController::class, 'home']);
Route::get('/list', [DimsumController::class, 'list']);
Route::get('/detail/{id}', [DimsumController::class, 'detail']);
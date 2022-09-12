<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BasicCardController;

Route::get('/', [BasicCardController::class, 'onSelect']);
Route::post('/insert', [BasicCardController::class, 'onInsert']);
Route::get('/update', [BasicCardController::class, 'onUpdate']);
Route::get('/delete', [BasicCardController::class, 'onDelete']);


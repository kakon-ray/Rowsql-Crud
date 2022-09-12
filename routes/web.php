<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BasicCardController;

Route::get('/', [BasicCardController::class, 'onSelect']);
Route::get('/insert', function(){
    return view('insert');
});
Route::post('/insert-data',[BasicCardController::class, 'onInsert']);
Route::get('/update', [BasicCardController::class, 'onUpdate']);
Route::get('/delete-show',function(){
    return view('delete');
});
Route::post('/delete', [BasicCardController::class, 'onDelete']);


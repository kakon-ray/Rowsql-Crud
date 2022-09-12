<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BasicCardController;

Route::get('/', [BasicCardController::class, 'onSelect']);
Route::get('/insert', function(){
    return view('insert');
});
Route::post('/insert-data',[BasicCardController::class, 'onInsert']);

Route::get('/delete-show',function(){
    return view('delete');
});
Route::post('/delete', [BasicCardController::class, 'onDelete']);


Route::get('/update-show',function(){
    return view('update');
});
Route::post('/updateData', [BasicCardController::class, 'onUpdate']);


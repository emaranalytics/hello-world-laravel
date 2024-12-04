<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoopController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loops/for', [LoopController::class, 'forLoop']);
Route::get('/loops/while', [LoopController::class, 'whileLoop']);
Route::get('/loops/do-while', [LoopController::class, 'doWhileLoop']);
Route::get('/loops/foreach', [LoopController::class, 'foreachLoop']);

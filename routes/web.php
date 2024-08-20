<?php

use App\Http\Controllers\NumberController;


Route::get('/', [NumberController::class, 'index']);
Route::post('/', [NumberController::class, 'generateNumber']);

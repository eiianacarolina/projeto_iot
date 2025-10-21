<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/registro', [RegistroController::class, 'store']);

Route::get('/sensor/findbycod/{codigo}', [SensorController::class, 'findByCod']);

Route::put('/sensor/update/{codigo}', [SensorController::class, 'update']);

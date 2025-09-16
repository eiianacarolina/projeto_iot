<?php

use App\Http\Controllers\RegistroController;
use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('cadastros', [RegistroController::class, 'Store']);

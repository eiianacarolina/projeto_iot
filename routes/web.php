<?php

use App\Http\Controllers\SensorController;
use App\Livewire\Dashboard;
use App\Livewire\SensorCreate;
use App\Livewire\SensorEdit;
use App\Livewire\SensorList;
use App\Livewire\Registro\RegistroList;
use App\Livewire\AmbienteCreate;
use App\Livewire\AmbienteEdit;
use App\Livewire\AmbienteList;
use App\Livewire\Auth\Login;
use App\Livewire\ControleLed;
use Illuminate\Support\Facades\Route;

Route::get('/ambiente/list', AmbienteList::class)->name('ambiente.list');
Route::get('/ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');
Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/sensor/list', SensorList::class)->name('sensor.list');
Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/edit/{id}', SensorEdit::class)->name('sensor.edit');

Route::get('/registro/list', RegistroList::class);

Route::get('/controle/led', ControleLed::class)->name('controle.list');

Route::get('/login', Login::class);

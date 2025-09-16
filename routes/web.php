<?php

use App\Livewire\Dashboard;
use App\Livewire\Registro\RegistroList;
use App\Models\Registro;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('registro/list', RegistroList::class);


<?php

use App\Livewire\Prueba;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/componente-prueba', function () {
 return view("prueba");  
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/livewire-componente', function(){
    return view('livewire');
});

Route::get('livewire', Prueba::class);



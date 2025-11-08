<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', [AboutMeController::class, 'aboutPage']);

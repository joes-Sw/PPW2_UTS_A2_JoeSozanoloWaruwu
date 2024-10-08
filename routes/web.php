<?php

use App\Http\Controllers\PemainMuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [PemainMuController::class, 'index']);
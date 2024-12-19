<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    //return view('welcome');
    return view('welcomLaravelFirst');
});

Route::resource('rooms', RoomController::class);

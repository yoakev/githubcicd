<?php

use Illuminate\Support\Facades\Route;

//contoh dari ruter get
Route::get('/', function () {
    return view('welcome');
});

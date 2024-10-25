<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelojController; 

Route::get('/', function () {
    return view('index');
})->name('index'); 

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio'); 

Route::get('/index', function () {
    return redirect()->route('relojes.index'); 
})->name('index');

Route::resource('relojes', RelojController::class);

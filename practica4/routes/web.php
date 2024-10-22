<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index'); 

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio'); 

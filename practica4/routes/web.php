<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');

});
Route::get('/news', function () {
    return view('news');
});Route::get('/portfolio', function () {
    return view('portfolio');
});
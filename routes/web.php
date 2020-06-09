<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/numbers', function () {

    $max = 100;
    
    return view('numbers', compact('max'));
});

Route::get('/about', function () {

    return view('about');
});


Route::get('/contacts', function () {

    return view('contacts');
});




<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('V1', function () {
    return view('V1');
});

Route::get('wip', function () {
    return view('wip');
});

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');
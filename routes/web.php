<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('home','HomeController@index');
Route::get('about','AboutController@index');
Route::get('services','ServicesController@index');
Route::get('gallery','GalleryController@index');
Route::get('contact','ContactController@index');


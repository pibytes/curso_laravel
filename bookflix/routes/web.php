<?php

use Illuminate\Support\Facades\Route;
use App\Libro;


Route::get('/', function () {
    $libros = Libro::all();
    return view('welcome', compact('libros'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

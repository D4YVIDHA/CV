<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('publicaciones/create','App\Http\Controllers\PublicacionController@create')->name('publicaciones.create');
Route::get('publicaciones','App\Http\Controllers\PublicacionController@store')->name('publicaciones.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

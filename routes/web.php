<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/portfolio/js/weather', function () {
	return view('js-weather.index', ['default' => '81001']);
});

Route::get('/portfolio/js/hangman', function() {
	return view('js-hangman.index');
});



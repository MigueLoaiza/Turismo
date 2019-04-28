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
    return view('index');
});

Route::get('/gastronomia', function () {
    return view('gastronomia');
});
Route::get('/eventos', function () {
    return view('eventos');
});
Route::get('/pueblosmagicos', function () {
    return view('pueblosmagicos');
});
Route::get('/lugares', function () {
    return view('lugares');
});
Route::get('/leyendas', function () {
    return view('leyendas');
});

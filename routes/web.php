<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('home-Main');
//Routes per i cagnolini
Route::get('/cagnolini', 'CagnoliniController@index')->name('homeCagnolini');
Route::get('/cagnolini/scelta/{id}', 'CagnoliniController@showCagnolino')->name('showCagnolino');

//Routes per gli omini
Route::get('/omini', 'OminiController@index')->name('homeOmini');
Route::get('/omini/scelta/{id}', 'OminiController@showCagnolino')->name('showOmino');

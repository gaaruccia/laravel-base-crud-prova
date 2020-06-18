<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('home-Main');

// CAGNOLINI
Route::get('/cagnolini', 'CagnoliniController@index')->name('homeCagnolini');
Route::get('/cagnolini/scelta/{id}', 'CagnoliniController@showCagnolino')->name('showCagnolino');

// OMINI
Route::get('/omini', 'OminiController@index')->name('homeOmini'); //ok
Route::get('/omini/scelta/{id}', 'OminiController@showOmino')->name('showOmino'); //ok
// -> create
Route::get('/omini/create/', 'OminiController@createOmino')->name('createOmino');
Route::post('/omini/store/', 'OminiController@storeOmino')->name('storeOmino');
// -> update
Route::get('/omini/edit/{id}', 'OminiController@editOmino')->name('editOmino'); //ok
Route::post('/omini/update/{id}', 'OminiController@updateOmino')->name('updateOmino'); //ok
// -> delete
Route::get('/omini/delete/{id}', 'OminiController@deleteOmino')->name('deleteOmino');

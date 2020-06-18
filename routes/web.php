<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('home-Main');

// CAGNOLINI
Route::get('/cagnolini', 'CagnoliniController@index')->name('homeCagnolini');
Route::get('/cagnolini/scelta/{id}', 'CagnoliniController@showCagnolino')->name('showCagnolino');
// -> create
Route::get('/cagnolini/create/', 'CagnoliniController@createCagnolino')->name('createCagnolino');
Route::post('/cagnolini/store/', 'CagnoliniController@storeCagnolino')->name('storeCagnolino');
// -> update
Route::get('/cagnolini/edit/{id}', 'CagnoliniController@editCagnolino')->name('editCagnolino');
Route::post('/cagnolini/update/{id}', 'CagnoliniController@updateCagnolino')->name('updateCagnolino');
// -> delete
Route::get('/cagnolini/delete/{id}', 'CagnoliniController@deleteCagnolino')->name('deleteCagnolino');



// OMINI
Route::get('/omini', 'OminiController@index')->name('homeOmini');
Route::get('/omini/scelta/{id}', 'OminiController@showOmino')->name('showOmino');
// -> create
Route::get('/omini/create/', 'OminiController@createOmino')->name('createOmino');
Route::post('/omini/store/', 'OminiController@storeOmino')->name('storeOmino');
// -> update
Route::get('/omini/edit/{id}', 'OminiController@editOmino')->name('editOmino');
Route::post('/omini/update/{id}', 'OminiController@updateOmino')->name('updateOmino');
// -> delete
Route::get('/omini/delete/{id}', 'OminiController@deleteOmino')->name('deleteOmino');

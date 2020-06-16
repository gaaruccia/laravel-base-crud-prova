<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'CagnoliniController@index')->name('index');

Route::get('/cagnolino/{id}', 'CagnoliniController@showCagnolino')->name('showCagnolino');

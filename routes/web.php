<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'Cagnolini@showCagnolini')->name('index');

Route::get('/cagnolino/{id}', 'Cagnolini@showCagnolino')->name('showCagnolino');

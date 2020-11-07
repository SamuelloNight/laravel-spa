<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', 'VueController@view')->where('any', '.*');

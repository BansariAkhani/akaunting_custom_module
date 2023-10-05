<?php

use Illuminate\Support\Facades\Route;

/**
 * 'admin' middleware and 'my-module' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::admin('my-module', function () {
    Route::get('/', 'Main@index');
});

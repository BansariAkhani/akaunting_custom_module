<?php

use Illuminate\Support\Facades\Route;

/**
 * 'api' middleware and 'api/my-module' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::api('my-module', function () {
    
    Route::apiResource('users', 'Users');
    Route::apiResource('invoices', 'Invoices');
});
<?php

use Illuminate\Support\Facades\Route;

/**
 * 'portal' middleware and 'portal/my-module' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::portal('my-module', function () {
    // Route::get('invoices/{invoice}', 'Main@show')->name('invoices.show');
    // Route::post('invoices/{invoice}/confirm', 'Main@confirm')->name('invoices.confirm');
});

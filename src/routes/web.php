<?php

//Namespace for GAPI routes
Route::namespace('Gapi')->prefix('gapi')->name('gapi.')->group(function () {

    Route::get('/redirect', 'LaraGapiController@redirectTo')->name('redirect');
    Route::get('/authCallback', 'LaraGapiController@handleCallback')->name('authCallback');
    Route::get('/logout', 'LaraGapiController@logout')->name('logout');
});
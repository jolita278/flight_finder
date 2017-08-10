<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'auth']], function () {
    Route::get('/', ['as' => 'app.flights.index', 'uses' => 'FFFlightsController@adminIndex']);

    Route::group(['prefix' => 'airlines'], function () {
        Route::get('/', ['as' => 'app.airlines.index', 'uses' => 'FFAirlinesController@adminIndex']);
        Route::get('/create', ['as' => 'app.airlines.create', 'uses' => 'FFAirlinesController@adminCreate']);
        Route::post('/create', ['uses' => 'FFAirlinesController@adminStore']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['as' => 'app.airlines.show', 'uses' => 'FFAirlinesController@adminShow']);
            Route::get('/edit', ['as' => 'app.airlines.edit', 'uses' => 'FFAirlinesController@adminEdit']);
            Route::post('/edit', ['uses' => 'FFAirlinesController@adminUpdate']);
            Route::delete('/delete', ['as' => 'app.airlines.destroy', 'uses' => 'FFAirlinesController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'airports'], function () {
        Route::get('/', ['as' => 'app.airports.index', 'uses' => 'FFAirportsController@adminIndex']);
        Route::get('/create', ['as' => 'app.airports.create', 'uses' => 'FFAirportsController@adminCreate']);
        Route::post('/create', ['uses' => 'FFAirportsController@adminStore']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['as' => 'app.airports.show', 'uses' => 'FFAirportsController@adminShow']);
            Route::get('/edit', ['as' => 'app.airports.edit', 'uses' => 'FFAirportsController@adminEdit']);
            Route::post('/edit', ['uses' => 'FFAirportsController@adminUpdate']);
            Route::delete('/delete', ['as' => 'app.airports.destroy', 'uses' => 'FFAirportsController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'flights'], function () {
        Route::get('/', ['as' => 'app.flights.index', 'uses' => 'FFFlightsController@adminIndex']);
        Route::get('/create', ['as' => 'app.flights.create', 'uses' => 'FFFlightsController@adminCreate']);
        Route::post('/create', ['uses' => 'FFFlightsController@adminStore']);
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['as' => 'app.flights.show', 'uses' => 'FFFlightsController@adminShow']);
            Route::get('/edit', ['as' => 'app.flights.edit', 'uses' => 'FFFlightsController@adminEdit']);
            Route::post('/edit', ['uses' => 'FFFlightsController@adminUpdate']);
            Route::delete('/delete', ['as' => 'app.flights.destroy', 'uses' => 'FFFlightsController@adminDestroy']);
        });
    });
});

Route::group(['prefix' => 'generate-fd'], function () {
    Route::get('/airports/{count?}', ['uses' => 'FakeDataController@generateAirports']);
    Route::get('/airlines/{count?}', ['uses' => 'FakeDataController@generateAirlines']);
    Route::get('/flights/{count?}', ['uses' => 'FakeDataController@generateFlights']);

});
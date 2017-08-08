<?php

namespace App\models;


class FFFlights extends CoreModel
{

    /**
     * Database table name
     * @var string
     */
    protected $table = 'ff_flights';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'airline_id', 'arival', 'depature', 'destination', 'origin' ];
}

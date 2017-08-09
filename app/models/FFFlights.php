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

    public $hidden = ['count','deleted_at', 'airline_id','destination', 'origin' ];



    public function airline(){

        return $this->hasOne(FFAirlines::class, 'id', 'airline_id');
    }
    public function origin_airport(){

        return $this->hasOne(FFAirports::class, 'id', 'origin');
    }
    public function destination_airport(){

        return $this->hasOne(FFAirports::class, 'id', 'destination');
    }

}

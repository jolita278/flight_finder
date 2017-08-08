<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class FFAirports extends Model
{
    /**
     * Database table name
     * @var string
     */
    protected $table = 'ff_airports';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'name', 'country_id', 'city'];

    public $incrementing = false;
}

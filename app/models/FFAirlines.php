<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class FFAirlines extends Model
{
    /**
     * Database table name
     * @var string
     */
    protected $table = 'ff_airlines';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'name', ];
}

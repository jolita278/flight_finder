<?php

namespace App\models;


class FFAirlines extends CoreModel
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

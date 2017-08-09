<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class FFCountries extends Model
{
    /**
     * Database table name
     * @var string
     */
    protected $table = 'ff_countries';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'original_name'];
}

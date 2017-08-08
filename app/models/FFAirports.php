<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FFAirports extends Model
{
    use SoftDeletes;

    public $hidden = ['deleted_at'];
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

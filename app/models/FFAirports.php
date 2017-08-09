<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FFAirports extends Model
{
    use SoftDeletes;

    public $incrementing = false;

    public $hidden = ['deleted_at', 'country_id'];
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


    public function country(){

        return $this->hasOne(FFCountries::class, 'id', 'country_id');
    }
}

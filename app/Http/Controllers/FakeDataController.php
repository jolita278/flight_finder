<?php

namespace App\Http\Controllers;

use App\models\FFAirlines;
use App\models\FFAirports;
use App\models\FFCountries;
use App\models\FFFlights;
use Faker\Factory;

class FakeDataController extends Controller
{
    public function generateAirports($count = 20)
    {
        function getRandomString($length = 3)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $airport_id = '';


            for ($i = 0; $i < $length; $i++) {
                $airport_id .= $characters[mt_rand(0, strlen($characters) - 1)];
            }

            return $airport_id;
        }

        $faker = Factory::create();
        for ($i = 0; $i < $count; $i++) {
            $city = $faker->city;

            FFAirports::create([
                'id' => getRandomString(),
                'city' => $city,
                'name' => $city . " " . $faker->company . " Airport",
                'country_id' => FFCountries::all()->random()->id,
            ]);
        }
    }

    public function generateAirlines($count = 20)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $count; $i++) {
            FFAirlines::create([
                'id' => $faker->uuid,
                'name' => $faker->company
            ]);
        }
    }

    public function generateFlights($count = 20)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $count; $i++) {

            $time = Carbon::create(rand(2017, 2018), rand(1, 12), rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59));
            FFFlights::create([
                'id' => $faker->uuid,
                'airline_id' => FFAirlines::all()->random()->id,
                'destination' => FFAirports::all()->random()->id,
                'origin' => FFAirports::all()->random()->id,
                'depature' => $time->toDateTimeString(),
                'arival' => $time->addMinutes(rand(30, 960))->toDateTimeString()
            ]);
        }
    }


}

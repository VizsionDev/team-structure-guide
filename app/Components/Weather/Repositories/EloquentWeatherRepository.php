<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 11/29/2017
 * Time: 2:50 PM
 */

namespace App\Components\Weather\Repositories;


use App\Components\Weather\Contracts\IWeatherFetcher;
use App\Components\Weather\Models\Weather;

class EloquentWeatherRepository implements IWeatherFetcher
{

    public function get(): Weather
    {
        // query database
        $dataFormSQL = ['I AM FROM SQL', 50];

        $Weather = new Weather();

        $Weather->location = $dataFormSQL[0];
        $Weather->value = $dataFormSQL[1];

        return $Weather;
    }
}
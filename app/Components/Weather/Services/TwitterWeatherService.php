<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 11/29/2017
 * Time: 2:38 PM
 */

namespace App\Components\Weather\Services;


use App\Components\Weather\Contracts\IWeatherFetcher;
use App\Components\Weather\Models\Weather;

class TwitterWeatherService implements IWeatherFetcher
{

    public function get(): Weather
    {
        // 3rd party api
        $twitterResposne = ['las vegas from twitter',39];

        $Weather = new Weather();

        $Weather->location = $twitterResposne[0];
        $Weather->value = $twitterResposne[1];

        return $Weather;
    }
}
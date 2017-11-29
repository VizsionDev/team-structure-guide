<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 11/29/2017
 * Time: 2:33 PM
 */

namespace App\Components\Weather\Services;


use App\Components\Weather\Contracts\IWeatherFetcher;
use App\Components\Weather\Models\Weather;

class APXUWeatherService implements IWeatherFetcher
{

    public function get(): Weather
    {
        // it call 3rd party api
        $apix = [
            'location' => 'Sample location from apixu',
            'value' => 20,
        ];

        $Weather = new Weather();

        $Weather->location = $apix['location'];
        $Weather->value = $apix['value'];

        return $Weather;
    }
}
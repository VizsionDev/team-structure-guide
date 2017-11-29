<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 11/29/2017
 * Time: 2:31 PM
 */

namespace App\Components\Weather\Contracts;


use App\Components\Weather\Models\Weather;

interface IWeatherFetcher
{
    public function get(): Weather;
}
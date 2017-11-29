<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 11/29/2017
 * Time: 2:35 PM
 */

namespace App\Http\Controllers;


use App\Components\Weather\Contracts\IWeatherFetcher;

class WeatherController extends Controller
{
    /**
     * @var IWeatherFetcher
     */
    private $weatherFetcher;

    /**
     * WeatherController constructor.
     * @param IWeatherFetcher $weatherFetcher
     */
    public function __construct(IWeatherFetcher $weatherFetcher)
    {
        $this->weatherFetcher = $weatherFetcher;
    }

    public function index()
    {
        $res = $this->weatherFetcher->get();

        return response()->json([
            'message' => 'Some message here',
            'data' => $res,
            'status_code' => 200
        ]);
    }

    public function indexPage()
    {
        return view('weather::weather-index');
    }
}
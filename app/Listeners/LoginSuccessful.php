<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Dnsimmons\OpenWeather\OpenWeather;
Use \Carbon\Carbon;
use Session;
use App\Models\Weather;

class LoginSuccessful
{
 
    public function __construct()
    {
        //
    }

    public function handle(Login $event)
    {   
        $userinfo = $event->user;
        $weather = new OpenWeather();
        $date = Carbon::now();
        $parse = Carbon::parse('UTC');
        $colombo = $weather->getCurrentWeatherByCityId('1248991', 'metric');
        $melbourne = $weather->getCurrentWeatherByCityId('2148955', 'metric');
        $saveWeatherHistory = Weather::create([
            'user_id'     => $userinfo->id,
            'logged_at'   => $parse->isoFormat('dddd MMMM Do YYYY, h:mm a'),
            'col_temp' => $colombo['forecast']['temp'],
            'mel_temp' => $melbourne['forecast']['temp']
        ]);
        Session::flash('login-success', 'Hello ' . $event->user->name . ', Welcome back!');
    }
}

<?php

namespace App\Repositories;

use App\Repositories\Interfaces\WeatherRepositoryInterface;
use App\Models\Weather;
use Auth;

class WeatherRepository implements WeatherRepositoryInterface {

    public function getAllTemperatures() 
    {   
        $currentuserid = Auth::user()->id;
        return Weather::sortable()->where('user_id', $currentuserid)->orderBy('logged_at', 'DESC')->get();
    }
        
}

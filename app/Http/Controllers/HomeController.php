<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\WeatherRepositoryInterface;
use DataTables;

class HomeController extends Controller
{
    public function __construct(WeatherRepositoryInterface $weatherRepository) 
    {
        $this->weatherRepository = $weatherRepository;
        $this->middleware('auth');
    }

    public function index()
    {   
        $data = $this->weatherRepository->getAllTemperatures();
        return view('home', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Todays weather*/
        $jsonWeather = file_get_contents("http://apidev.accuweather.com/currentconditions/v1/7894.json?language=en&apikey=hoArfRosT1215");
        $weather = json_decode($jsonWeather, true);
        //Get number of active projects
        $activeProjects = DB::table('projects')->where("author_id", auth()->user()->id)->count();
        return view('home', ['activeProjects' => $activeProjects], ['weather' => $weather]);
    }
}

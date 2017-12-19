<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

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
        //Init variables
        $users_per_message = [];
        
        /*Todays weather*/
        $jsonWeather = file_get_contents("http://apidev.accuweather.com/currentconditions/v1/7894.json?language=en&apikey=hoArfRosT1215");
        $weather = json_decode($jsonWeather, true);
  
        //Get number of active projects
        $activeProjects = DB::table('projects')->where("author_id", auth()->user()->id)->get();
        $tasksAsigned = DB::table('tasks_users')->where('id_user',auth()->user()->id)->count();
        $actualUser = Auth::User();
        $projects_user = count(DB::table('projects_users')->where("id_user", auth()->user()->id)->get());
        
        $messages = DB::table('messages')->get();
        
        foreach($messages as $user) {
            $users = DB::table('users')->where("id", $user->user_id)->get();
            if ($users->count() != 0){
                $users_per_message [] = [
                    'users' => $users,
                    'message' => $user
                ];
            }
        }
        

        return view('home', [
            'activeProjects' => $activeProjects,
            'tasksAsigned' => $tasksAsigned,
            'actualUser' => $actualUser ,
            'assignedProjects' => $projects_user,
            'users_per_message' => $users_per_message,
            'weather' => $weather
        ]);
    }
}

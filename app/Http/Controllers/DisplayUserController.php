<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DisplayUserController extends Controller
{
    public function displayUser(Request $request) {
        $actualUser = DB::table('users')
            ->where('id', '=', $request->id)
            ->get();
        
        $tasksAsigned = DB::table('tasks_users')->where('id_user',$request->id)->count();
        $friends = DB::table('friend_user')->where('user_id',$request->id)->count();
        $projects = DB::table('projects')->where('author_id',$request->id)->count();

        return view('view-user', [
            'actualUser' => $actualUser[0],
            'tasksAsigned' => $tasksAsigned,
            'friends' => $friends,
            'projects' => $projects
        ]);

    }
}

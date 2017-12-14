<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProjectDisplayController extends Controller
{
    public function showProject($request) {
        $projectRequested = DB::table('projects')
        ->where('id', '=', $request)
        ->get();
        return view('project.project-display', ['projectRequested' => $projectRequested[0]]);
    }

    public function getProjectAxios($request) {
        
        //Traigo el proyecto que me pide
        $projectRequested = DB::table('projects')
            ->where('id', '=', $request)
            ->get();

        //Armo la respuesta
        $response = [
            'project' => $projectRequested,
        ];

        header('Content-Type: application/json');
        echo(json_encode($response));
        exit;
    }

}

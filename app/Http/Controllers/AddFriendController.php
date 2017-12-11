<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;
use DB;

class AddFriendController extends Controller
{
    protected function showUsers() {

      $users = DB::select( DB::raw("SELECT * FROM users
      WHERE users.id NOT IN (SELECT friend_id FROM friend_user
      WHERE user_id = " . Auth::id() . ")
      AND users.id != " . Auth::id() . ""));

      return view('add-friend', ['users' => $users]);
      
    }

    public function addNewFriend($request) {
      $actualUser = Auth::user();
      $userFriends = $actualUser->getFriends();
      $friendExists = false;
      $response = [];

      //Primero me fijo que no este como amigo
      if($userFriends) {
        foreach ($userFriends as $friend) {
          if($friend->id == $request) {
            $friendExists = true;

            $response = [
              'friendAdded' => false,
              'error' => 'friendExits'
            ];

            break;
          } 
        }
      }

      //Si no esta como amigo lo agrego
      if(!$friendExists) {
        $actualUser -> addFriend($request);

        $response = [
          'friendAdded' => true,
        ];
      }

      header('Content-Type: application/json');
      echo(json_encode($response));
      exit;
    }
}

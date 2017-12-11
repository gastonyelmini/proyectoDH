<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;
use DB;

class AddFriendController extends Controller
{
    protected function showUsers() {

      $users = DB::table('users')->where('id', '!=', Auth::id())->get();

      return view('add-friend', ['users' => $users]);
      
      // SELECT * FROM bool_db.users
      // INNER JOIN friend_user 
      // where users.id != user_id
      // AND users.id != friend_id	
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

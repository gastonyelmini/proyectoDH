<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;
use DB;

class FriendController extends Controller
{
  protected function showFriends() {
    $friends = Auth::user()->getFriends();

    return view('friends', ['friends' => $friends]);
  }

  public function deleteFriend($request) {
    $actualUser = Auth::user();
    $userFriends = $actualUser->getFriends();
    $friendDeleted = false;
    $response = [];

    //Primero me fijo que no este como amigo
    if($userFriends) {
      foreach ($userFriends as $friend) {
        if($friend->id == $request) {
          $friendDeleted = true;
          $actualUser->removeFriend($request);

          $response = [
            'friendDeleted' => true
          ];

          break;
        } 
      }
    }

    //Si no esta como amigo lo agrego
    if(!$friendDeleted) {

      $response = [
        'error' => 'userNotExit',
      ];
    }

    header('Content-Type: application/json');
    echo(json_encode($response));
    exit;
  }
  
}

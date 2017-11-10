<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class User_edit_controller extends Controller
{

    public function updateUserInfo (Request $request) {
      // $user->lastName = $request->input('lastName');
      // $user->save();
      // // update database
      // return User::table([
      //   $table->string('lastName')->unique(),
      //   $table->string('phone')->unique(),
      //   $table->string('ocupation')->unique(),
      //   $table->string('description')->unique(),
      //   $table->string('adress')->unique(),
      //   $table->string('avatar')->unique(),
      //     // 'lastName' => $data['lastName'],
      //     // 'phone' => $data['phone'],
      //     // 'ocupation' => $data['ocupation'],
      //     // 'description' => $data['description'],
      //     // 'adress' => $data['adress'],
      //     // 'avatar' => $data['avatar'],
      //
      // ]);

      dd("Dentro del controlador");
    }
}

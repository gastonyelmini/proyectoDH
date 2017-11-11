<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class User_edit_controller extends Controller
{
      public function displayView(){
            return view('edit-user');
      }
      public function updateUserInfo (Request $request) {
            
            // DB::table('users')
            //       ->where('id', auth()->user()->id)
            //       ->update([
            //             'lastName' => $request->lastName,
            //             'phone' => $request->phone,
            //             'ocupation' => $request->ocupation,
            //             'description' => $request->description,
            //             'adress' => $request->adress,
            //             'avatar' => $request->avatar,
            //       ]);

            $id = auth()->user()->id;
            $input = array_filter($request->except(['_token']));
            
            User::where('id', $id)->update($input);
            // dd(auth()->user());
            //dd($input);
            $newValues = implode(', ',$input);
            return redirect()
                   ->route('edit-user')
                   ->with('info', 'Information edited: ' . $newValues);
    }
}






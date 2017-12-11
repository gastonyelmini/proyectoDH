<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Image;
use Auth;

class User_edit_controller extends Controller
{
      public function displayView(){

            $actualUser = Auth::User();
            return view('edit-user', ['actualUser' => $actualUser]);
      }
      public function updateUserInfo (Request $request) {

            $id = auth()->user()->id;
            $input = array_filter($request->except(['_token', 'avatar']));

            User::where('id', $id)->update($input);
            // dd(auth()->user());
            //dd($input);
            $newValues = implode(', ',$input);

            if ($request->hasFile('avatar')) {
              $avatar = $request->file('avatar');
              //Nombre para archivo
              $filename = time() . '.' . $avatar->getClientOriginalExtension();
              Image::make($avatar)->fit(200)->save(public_path('/images/profile_images/'. $filename));
              //Guardo nombre de imagen en db
              $user = Auth::user();
              $user->avatar = $filename;
              $user->save();
              $newValues = $newValues . ', profile image edited';
            }


            return redirect()
                   ->route('edit-user')
                   ->with('info', 'Information edited: ' . $newValues);
    }
}

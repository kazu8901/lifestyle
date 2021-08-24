<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //

    public function index() {

      $auth = Auth::user();
      return view('users.index', ['auth' => $auth]);
    }

    public function edit() {
      $auth = Auth::user();
      return view('users.edit', ['auth' => $auth]);
    }

    public function update(Request $request) {
      $user = Auth::user();

      $user_form = $request->all();

      if($request->hasFile('profile_icon')) {
        $profile_icon = $request->file('profile_icon');
        $file_path = $profile_icon->store('public/image');
        $user_form['profile_icon'] = str_replace('public/image/', '', $file_path);
      }

      unset($user_form['_token']);
      $user->fill($user_form)->save();
      return redirect('/mypage');
    }
}

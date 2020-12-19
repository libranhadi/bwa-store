<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteLoginController extends Controller
{
      public function redirectToGoogle(){
       
        return Socialite::driver('google')->redirect();
    
    }
     public function handleGoogleCallback()
    {
        $Authuser = Socialite::driver('google')->user();
        $user = User::where('google_id', $Authuser->id)->first();
      if ($user) {
          # code..
          Auth::loginUsingId($user->id);
          return redirect('/');
      } 
      else {
          $newUser= User::create([
            'name' => $Authuser->name,
            'email' => $Authuser->email,
            'google_id' => $Authuser->id,
         'password' => md5($Authuser->token),
          ]);
           Auth::login($newUser);
            return redirect('/');
      }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Models\User;

class FacebookController extends Controller
{
    public function loginUsingFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    
    public function callbackFromFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            //dd($user);
            $saveUser = User::updateOrCreate([
                'facebook_id' => $user->getId(),
            ],[
                'name' => $user->getName(),
                'email' => $user->getEmail()
            ]);
            Auth::loginUsingId($saveUser->id);
            return redirect()->route('/');
        } catch(\Throwable $th) {
            throw $th;
        }
    }
}

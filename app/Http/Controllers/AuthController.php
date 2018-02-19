<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Socialite as Socialite;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('auth.register');
    }

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function facebookCallback($data)
    {
       	$user = Socialite::driver('facebook')->user();
       	return $user;
    }
}

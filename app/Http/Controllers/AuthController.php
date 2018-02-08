<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('auth.register');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function getHome()
    {
        return view('home');
    }
}

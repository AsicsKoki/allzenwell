<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;

class ListingController extends Controller
{
    public function getListings()
    {
        return view('listing.allListings');
    }

    public function newListing()
    {
        return view('listing.newListing');
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@getHome')->name('getHome');
Route::get('/register', 'AuthController@getRegister')->name('getRegister');

//facebook OAuth
Route::get('/redirect', 'AuthController@facebookRedirect');
Route::get('/callback/{data}', 'AuthController@facebookCallback');

//Listings
Route::get('/panel/all-listings', 'ListingController@getListings')->name('getListings');
Route::get('/panel/new-listing', 'ListingController@newListing')->name('newListing');
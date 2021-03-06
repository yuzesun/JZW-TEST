<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function ()
{
//    User::create([
//        'username' => 'Wen Shi',
//        'email' => 'sun@unomaha.edu',
//        'password' => Hash::make('password1234')
//    ]);
    return view('home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('orders/search','OrderController@searchOrder');
    Route::resource('orders','OrderController');
});

Route::get('order/search','OrderController@searchGeneralOrder');

/*Route::group(['prefix' => 'admin'], function() {
    Route::get('register', 'Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Auth\AuthController@register');
});*/

Route::auth();

Route::get('/home', 'HomeController@index');




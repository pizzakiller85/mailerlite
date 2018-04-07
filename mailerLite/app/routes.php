<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return View::make('hello');
    //return redirect()->route('subscribers');
    return Redirect::to('subscribers');
});

//Route::get('users', 'UserController@getIndex');

Route::get('users', function()
{
    $users = User::all();
   
    return View::make('users')->with('users', $users);
    //Route::get('sers', 'UserController@getIndex');
    //return 'Users!';
});


Route::get('subscribersCreate', function()
{
    return View::make('subscribersCreate');
 });

Route::get('subscribers', 'SubscriberController@getSubscribers');

Route::post('subscribers', 'SubscriberController@storeSubscriber');




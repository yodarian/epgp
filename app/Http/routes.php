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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('members/{id}', 'MembersController@show');

Route::model('members', 'App\Member');
Route::model('events', 'App\Event');

// Use slugs rather than IDs in URLs
//Route::bind('members', function($value, $route) {
//    return App\Member::whereName($value)->first();
//});
//Route::bind('events', function($value, $route) {
//    return App\Events::whereName($value)->first();
//});

Route::resource('members', 'MembersController');
Route::resource('events', 'EventsController');

Route::controllers([
    'auth'  => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

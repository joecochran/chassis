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
Route::get('/', 'PagesController@show'); 
Route::resource('sessions', 'SessionsController', array('only' => array('create', 'store', 'destroy')));
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::controller('password', 'RemindersController');

Route::get('admin', function(){
    return View::make('dashboard');
})->before('auth');

Route::resource('pages', 'PagesController');


Route::resource('settings', 'SettingsController');
Route::resource('users', 'UsersController');
Route::get('{any}', 'PagesController@show');

View::composer('layouts.inc.cms-header', function($view){
    $currentUser = Auth::user();
    $view->with('currentUser', $currentUser); 
});

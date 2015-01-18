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

// Route::get('/', 'PagesController@show'); 
Route::resource('sessions', 'SessionsController', array('only' => array('create', 'store', 'destroy')));
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');


Route::get('tags', function(){
    return Tag::all();
});

Route::get('posts', ['as' => 'posts.admin', 'uses' => 'PostsController@admin']);
Route::resource('posts', 'PostsController', array('except' => array('index')));

Route::controller('password', 'RemindersController');
Route::get('admin', function(){
    return View::make('dashboard');
})->before('auth');


Route::resource('pages', 'PagesController');
Route::resource('settings', 'SettingsController');
Route::resource('users', 'UsersController');
// Route::get('{any}', 'PagesController@show');

// ALL THE BLOG STUFF
Route::get('feed', 'RssController@index');
Route::get('/', 'PostsController@index');
Route::get('category/', 'CategoriesController@index');
Route::get('category/{name}', 'CategoriesController@index');
Route::get('tag/', 'TagsController@index');
Route::get('tag/{name}', 'TagsController@index');
Route::get('archive/{year}/{month}', 'PostsController@archive');
Route::get('archive/{year}', 'PostsController@archive');
Route::get('blog/{slug}', 'PostsController@show');

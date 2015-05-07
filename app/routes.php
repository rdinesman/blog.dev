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
	return View::make('my-first-view')->with($data = ["name" => "Codeup"]);
});

Route::get('sayhello/{name?}', function($name = 'Codeup'){
	$data = ['name' => $name];
	return View::make('my-first-view')->with($data);
});

Route::get('resume', function(){
	return View::make('resume');
});

Route::get('portfolio', function(){
	return View::make("portfolio");
});

Route::get('about', function(){
	return View::make('about');
});

Route::get('rollDice/{guess}/{sides?}', function($guess, $sides = 6){
	$data = ['guess' => $guess, 'sides' => $sides, 'roll' => rand(0, $sides)];
	return View::make('dice-roll')->with($data);
});

Route::resource('posts', 'PostsController');

Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@checkLogin');

Route::get('logout', 'LoginController@logout');

Route::get('portfolio', 'PortfolioController@portfolio');
Route::get('about', 'AboutController@about');
Route::get('resume', 'ResumeController@resume');


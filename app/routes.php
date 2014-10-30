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
	return View::make('index');
});

Route::get('/lorem-ipsum', function() {
    return View::make('lorem-ipsum');
});

Route::get('/faker/{number?}', function() {
	$number = Input::get('number');
	$faker = Faker\Factory::create();
    return View::make('faker')
    	->with('number', $number)
		->with('faker', $faker);	
});

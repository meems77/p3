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

Route::get('/lorem-ipsum/{number?}', function() {
	$number = Input::get('number');
	$generator = new Lorem();
	$paragraphs = $generator->getParagraphs($number);
	return View::make('lorem-ipsum')
		->with('number', $number)
		->with('paragraphs', $paragraphs);
		
});

Route::get('/faker/{number?}', function() {
	$number = Input::get('number');
	$faker = Faker\Factory::create();
    return View::make('faker')
    	->with('number', $number)
		->with('faker', $faker);	
});

Route::get('/faker/{number?}', function() {
	$number = Input::get('number');
	$faker = Faker\Factory::create();
    return View::make('faker')
    	->with('number', $number)
		->with('faker', $faker);	
});
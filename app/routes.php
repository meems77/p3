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

	//validate
	$rules = array(
		'number' => "Integer|Between:1,30"
	);
	$validator = Validator::make(Input::all(), $rules);
	
	//error messages
	if ($validator->fails()) {
		$messages = $validator->messages();
		return Redirect::to('lorem-ipsum')
			->withErrors($validator);
	} else {
	//result
		$generator = new Lorem();	
		$paragraphs = $generator->getParagraphs($number);
		return View::make('lorem-ipsum')
		->with('number', $number)
		->with('paragraphs', $paragraphs);
	}
});



Route::get('/faker/{number?}', function() {
	$number = Input::get('number');
	$faker = Faker\Factory::create();
	
    //validate
	$rules = array(
		'number' => "Integer|Between:1,100"
	);
	
	$validator = Validator::make(Input::all(), $rules);
    
	//error messages
    if ($validator->fails()) {
			$messages = $validator->messages();
		return Redirect::to('faker')
			->withErrors($validator);
	} else {
	//result
    	return View::make('faker')
    		->with('number', $number)
			->with('faker', $faker);	
	}	
		
});


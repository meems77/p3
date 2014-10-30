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

    //validate: http://laravel.com/docs/4.2/validation
	//Why does adding "required|" makes a redirector loop?
	$rules = array(
		'number' => "Integer|Between:1,30"
	);
	$validator = Validator::make(Input::all(), $rules);
	
	//from Code Bright: http://daylerees.com/codebright/validation
	if ($validator->passes()) {
		$generator = new Lorem();	
		$paragraphs = $generator->getParagraphs($number);
		return View::make('lorem-ipsum')
		->with('number', $number)
		->with('paragraphs', $paragraphs);
	} else {	
		$messages = $validator->messages();
		return Redirect::to('lorem-ipsum')
			->withErrors($validator);
	}
});



Route::get('/faker/{number?}', function() {
	$number = Input::get('number');
	$faker = Faker\Factory::create();
	
	$rules = array(
		'number' => "Integer|Between:1,100"
	);
	
	$validator = Validator::make(Input::all(), $rules);
    
    if ($validator->passes()) {
			return View::make('faker')
    		->with('number', $number)
			->with('faker', $faker);	
	} else {
			$messages = $validator->messages();
			return Redirect::to('faker')
			->withErrors($validator);
	}	
		
});


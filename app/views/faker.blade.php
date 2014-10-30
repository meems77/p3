@extends('_master')

@section('title')
    Developer's Best Friend: Faker
@stop

@section('head')
    <link rel='stylesheet' href='styles/p3styles.css' type='text/css'>
@stop

@section('content')
    <h1>Developer's Best Friend: User Faker</h1>
    <p>You can instantly create multiple fake users for testing purposes.</p>	
@stop

@section('form')
	
	{{ Form::open(array(
   	 'url' => 'faker',
    	'method' => 'GET',
    	'accept-charset' => 'ISO-8859-1'
	)) }}
	
			<!--<label for="number">Number of Users</label>

			<input name="number" type="text" value="Enter number" id="number">

			<input type="submit" value="Submit">-->
			
		{{Form::label('number', 'Number of Users');}}

		{{Form::text('number', 'Enter number');}}
		
		{{Form::submit('Submit');}}



	{{ Form::close() }}

	@for ($i=0; $i < $number; $i++)
		<p>{{{$faker->name}}}<br/></p>
	@endfor

@stop

@section('footer')
    <script src="/js/hello-world.js"></script>
@stop
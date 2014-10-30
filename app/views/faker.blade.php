@extends('_master')

@section('title')
    Developer's Best Friend: Faker
@stop

@section('head')
    <link rel='stylesheet' href='styles/p3styles.css' type='text/css'>
@stop

@section('content')
    <h1>Developer's Best Friend: Fake Users?</h1>
    <p>You can instantly create multiple fake users for testing purposes.</p>	
@stop

@section('form')
	
	{{ Form::open(array(
   	 'url' => 'faker',
    	'method' => 'GET',
    	'accept-charset' => 'ISO-8859-1'
	)) }}
		
		<!--User field-->
		{{Form::label('number', 'Number of Users (1-100)');}}
		{{Form::text('number', ' ');}}
		<br>
		
		<!--Blurb Field-->
		{{ Form::checkbox('blurb', true, Input::get('blurb')) }} 
		{{Form::label('blurb', 'Include blurb');}}
    	
		<br>
		<!--Submit Button-->
		{{Form::submit('Submit',array('class' => 'btn btn-primary'));}}



	{{ Form::close() }}
	
	
	@if($errors->has())
	<p class="bg-danger">
		@foreach ($errors->all() as $error_message)
		{{$error_message}}<br>		
		@endforeach
	</p>
	@endif
	<br>
	<br>
	
	@for ($i=0; $i < $number; $i++)
		<p>{{{$faker->name}}}<br/>
		{{{$faker->streetAddress}}}<br/>
		{{{$faker->city}}}, {{{$faker->stateAbbr}}} {{{$faker->postcode}}}<br/>
		{{{$faker->phoneNumber}}}
		<br>
		
		//Include blurb if checked
		@if(Input::get('blurb'))
			{{{$faker->text}}};
		@endif
		</p>
	@endfor

@stop

@section('footer')
    <!--<script src="/js/hello-world.js"></script>-->
@stop
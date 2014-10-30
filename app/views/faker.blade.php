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
			
		{{Form::label('number', 'Number of Users (1-100)');}}

		{{Form::text('number', ' ');}}
		
		{{Form::submit('Submit');}}



	{{ Form::close() }}
	
	@if($errors->has())
	<div class="errors">
		@foreach ($errors->all() as $error)
		<ul>
			<li>{{$error}}</li>
		</ul>
		@endforeach
	</div>
	@endif

	@for ($i=0; $i < $number; $i++)
		<p>{{{$faker->name}}}<br/>
		{{{$faker->streetAddress}}}<br/>
		{{{$faker->city}}}, {{{$faker->stateAbbr}}} {{{$faker->postcode}}}<br/>
		{{{$faker->phoneNumber}}}
		</p>
	@endfor

@stop

@section('footer')
    <script src="/js/hello-world.js"></script>
@stop
@extends('_master')

@section('title')
    Faker
@stop

@section('head')
    <link rel='stylesheet' href='styles/p3styles.css' type='text/css'>
@stop

@section('content')
    <h1>Developer's Best Friend: Lorem Ipsum</h1>
@stop

@section('form')
	{{ Form::open(array(
   	 'url' => 'lorem-ipsum',
    	'method' => 'GET',
    	'accept-charset' => 'ISO-8859-1'
	)) }}
		{{Form::label('number', 'Number of paragraphs?');}}
		{{Form::text('number', '');}}
		{{Form::submit('Submit');}}

	{{ Form::close() }}
	
	@foreach ($paragraphs as $paragraph)
		<p>{{{$paragraph}}}</p>
	@endforeach

@stop


@section('footer')
    <script src="/js/hello-world.js"></script>
@stop
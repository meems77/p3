@extends('_master')

@section('title')
    Lorem Ipsum
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
		{{Form::label('number', 'Number of paragraphs? (1-30)');}}
		{{Form::text('number', '');}}
		{{Form::submit('Submit',array('class' => 'btn btn-primary'));}}

	{{ Form::close() }}
	
	@if($errors->has())
	<p class="bg-danger">
		@foreach ($errors->all() as $error_message)
			{{$error_message}}<br>
		@endforeach
	</p>
	@endif

	@foreach ($paragraphs as $paragraph)
		<p>{{{$paragraph}}}</p>
	@endforeach

@stop


@section('footer')
    <!--<script src="/js/hello-world.js"></script>-->
@stop
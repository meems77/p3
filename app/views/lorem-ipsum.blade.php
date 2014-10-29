@extends('_master')

@section('title')
    Faker
@stop

@section('head')
    <link rel='stylesheet' href='styles/p3styles.css' type='text/css'>
@stop

@section('content')
    <h1>Welcome!</h1>
@stop

@section('form')
	{{ Form::open(array(
   	 'url' => 'our/target/route',
    	'method' => 'GET',
    	'accept-charset' => 'ISO-8859-1'
	)) }}
@stop


@section('footer')
    <script src="/js/hello-world.js"></script>
@stop
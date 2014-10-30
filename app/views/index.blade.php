@extends('_master')

@section('title')
    Developer's Best Friend
@stop

@section('head')
    <link rel='stylesheet' href='styles/p3styles.css' type='text/css'>
@stop

@section('content')
    <h1>Developer's Best Friend</h1>
    <p>Need to create lots of fake data? Use these tools to create lorem ipsum paragraphs or fake random users.</p>

	<div id="homebuttons" class="row">
		<div class="col-md-4">
			<a href="/lorem-ipsum" class="btn btn-primary btn-lg" role="button">
			<span class="glyphicon"></span>Generate lorem ipsum</a>
		</div>
		<div class="col-md-4">
			<a href="/faker" class="btn btn-primary btn-lg" role="button">
			<span class="glyphicon"></span>Generate fake users</a>
		</div>
	</div>

@stop




@section('footer')
    <script src="/js/hello-world.js"></script>
@stop
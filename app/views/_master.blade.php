<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Developer\'s Best Friend')</title>

    <meta charset='utf-8'>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!--Extra Style-->
    <link rel='stylesheet' href='{{ asset('styles/p3styles.css') }}'>


    @yield('head')

</head>

 <body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a id="nav-far-left" class="navbar-brand" href="/">Mimi Lai DWA-15 Project 3</a>
			</div><!--navbar-header-->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li id="navhome"><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li id="navlorem"><a href="/lorem-ipsum"><span class="glyphicon glyphicon-pencil"></span> Lorem Ipsum</a></li>
					<li id="navfaker"><a href="/faker"><span class="glyphicon glyphicon-user"></span> Fake Users</a></li>
				</ul>
			</div><!--nav-collapse -->
		</div><!--container-->
	</div><!--navbar-->


<div class='container'>
	<br><br><br>
    @yield('content')
    @yield('form')
</div>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

    @yield('footer')

</body>
</html>
<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Developer's Best Friend')</title>

    <meta charset='utf-8'>
	<!--Extra Style-->
    <link rel='stylesheet' href='{{ asset('styles/p3styles.css') }}'>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    @yield('head')

</head>
<body>


    @yield('content')

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

    @yield('footer')

</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>Facebook friend system</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		{{ HTML::style('packages/css/app.css') }}
		{{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') }}

	</head>
	<body>
		@include ('layout.navigation')
		@yield('content')

		<!-- Latest compiled and minified JavaScript -->
		{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js') }}
		{{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js') }}
		
		@yield('script')		
	</body>
</html>
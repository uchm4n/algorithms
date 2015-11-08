<html>
	<head>
		<title>Algorithms</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		
		<link rel="stylesheet" type="text/css" href="../css/app.css">
		
		@yield('styles')
	</head>
	<body class="container">
		
		@include('partials.nav')
		
	    @yield('contents')
	    
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	    @yield('scripts')
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title'){{ config('app.name') }}</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	@yield('content')
</body>
</html>

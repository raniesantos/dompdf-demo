<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title'){{ config('app.name') }}</title>
	<link rel="stylesheet" href="{{ asset('css/resume.css') }}">
</head>
<body>

	@include('sections.basic')

	@include('sections.skills')

	@include('sections.work')

	@include('sections.education')

	@include('sections.seminars')

	@include('sections.achievements')

</body>
</html>

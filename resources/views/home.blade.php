@extends('layouts.base')

@section('content')

	<header>{{ config('app.name') }}</header>

	<a class="pdf" href="{{ url('/preview/pdf') }}" target="_blank">
		<span class="fa fa-file-pdf-o"></span>
		View as PDF file
	</a>
	<a class="web" href="{{ url('/preview/web') }}" target="_blank">
		<span class="fa fa-code"></span>
		View as web page
	</a>
	<a class="download" href="{{ url('/download') }}">
		<span class="fa fa-download"></span>
		Download ZIP file
	</a>

@stop

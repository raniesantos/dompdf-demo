@extends('layouts.base')

@section('content')
	<header>{{ config('app.name') }}</header>

	<a class="pdf" target="_blank" href="{{ url('/preview/pdf') }}">View as PDF</a>
	<a class="web" target="_blank" href="{{ url('/preview/web') }}">View as web page</a>
	<a class="download" href="{{ url('/download') }}">Download ZIP</a>
@stop

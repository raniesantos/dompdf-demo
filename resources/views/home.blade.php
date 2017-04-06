@extends('layouts.base')

@section('content')
	<a target="_blank" href="{{ url('/preview/pdf') }}">View as PDF</a>
	<a target="_blank" href="{{ url('/preview/web') }}">View as web page</a>
	<a href="{{ url('/download') }}">Download ZIP</a>
@stop

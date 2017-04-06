@extends('layouts.base')

@section('content')
	<a href="{{ url('/preview/pdf') }}">View as PDF</a>
	<a href="{{ url('/preview/web') }}">View as web page</a>
	<a href="{{ url('/generate') }}">Generate and Download ZIP</a>
@stop

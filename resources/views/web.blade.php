@extends('layouts.base')

@section('title', 'Web Preview')

@section('styles')
	<link rel="stylesheet" href="{{ asset('css/resume-web.css') }}">
@stop

@section('content')

	<div class="paper">
		
		@include('sections.basic')

		@include('sections.skills')

		@include('sections.work')

		@include('sections.education')

		@include('sections.seminars')

		@include('sections.achievements')
	
	</div>

@stop

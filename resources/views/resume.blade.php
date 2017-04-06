@extends('layouts.base')

@section('title', 'PDF Preview')

@section('styles')
	<link rel="stylesheet" href="{{ asset('css/resume-pdf.css') }}">
@stop

@section('content')

	@include('sections.basic')

	@include('sections.skills')

	@include('sections.work')

	@include('sections.education')

	@include('sections.seminars')

	@include('sections.achievements')
	
@stop

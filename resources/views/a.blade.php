@extends('layouts.resume')

@section('title', "Public (no mobile)")

@section('content')

	@include('sections.basic')

	@include('sections.skills')

	@include('sections.work')

	@include('sections.education')

	@include('sections.seminars')

	@include('sections.achievements')

@stop

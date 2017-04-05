<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('/a', function () {
	// public, no mobile number
	$pdf = PDF::loadView('x', compact('users'));
	return $pdf->download('ranie-santos-resume.pdf');
});

Route::get('/b', function () {
	// private, has mobile number
	$pdf = PDF::loadView('x', compact('users'));
	return $pdf->download('ranie-santos-resume-b.pdf');
});

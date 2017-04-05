<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('/test', function () {
	$my = json_decode(json_encode(config('me')));
});

Route::get('pdf/a', function () {
	$my = json_decode(json_encode(config('me')));

	// public, no mobile number
	$pdf = PDF::loadView('a', compact('my'));
	return $pdf->download('ranie-santos-resume.pdf');
});

Route::get('html/a', function () {
	$my = json_decode(json_encode(config('me')));
	return view('a', compact('my'));
});

Route::get('pdf/b', function () {
	$my = json_decode(json_encode(config('me')));

	// private, has mobile number
	$pdf = PDF::loadView('b', compact('my'));
	return $pdf->download('ranie-santos-resume-b.pdf');
});

Route::get('html/b', function () {
	$my = json_decode(json_encode(config('me')));
	return view('b', compact('my'));
});

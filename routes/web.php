<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('/generate', function () {
	$my = json_decode(json_encode(config('me')));

	// public, no mobile number
	$mobile = false;
	$pdf_a = PDF::loadView('resume', compact('my', 'mobile'))
		->save('pdf/ranie-santos-resume-a.pdf');

	// private, has mobile number
	$mobile = true;
	$pdf_b = PDF::loadView('resume', compact('my', 'mobile'))
		->save('pdf/ranie-santos-resume-b.pdf');
});

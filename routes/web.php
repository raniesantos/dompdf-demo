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

	Zipper::make(public_path('zip/resume.zip'))->add([
		public_path('pdf/ranie-santos-resume-a.pdf'),
		public_path('pdf/ranie-santos-resume-b.pdf'),
	])->close();

	return response()->download(public_path('zip/resume.zip'));
});

<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('/preview/pdf', function () {
	return PDF::loadView('resume', ['mobile' => true])->stream();
});

Route::get('/preview/web', function () {
	return view('resume', ['mobile' => true]);
});

Route::get('/generate', function () {
	// public, no mobile number
	$pdf_a = PDF::loadView('resume', ['mobile' => false])
		->save('pdf/ranie-santos-resume-a.pdf');

	// private, has mobile number
	$pdf_b = PDF::loadView('resume', ['mobile' => true])
		->save('pdf/ranie-santos-resume-b.pdf');

	Zipper::make(public_path('zip/resume.zip'))->add([
		public_path('pdf/ranie-santos-resume-a.pdf'),
		public_path('pdf/ranie-santos-resume-b.pdf'),
	])->close();

	return response()->download(public_path('zip/resume.zip'));
});

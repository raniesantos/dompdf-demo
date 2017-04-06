<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PreviewController extends Controller
{
	public function pdf() {
		return PDF::loadView('resume', ['mobile' => true])->stream();
	}

	public function web() {
		return view('web', ['mobile' => true]);
	}
}

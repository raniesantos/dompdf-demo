<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Zipper;

class DownloadController extends Controller
{
	public function download() {
		// public, no mobile number
		$pdf_a = PDF::loadView('resume', ['mobile' => false])
			->save('pdf/ranie-santos-resume-a.pdf');

		// private, has mobile number
		$pdf_b = PDF::loadView('resume', ['mobile' => true])
			->save('pdf/ranie-santos-resume-b.pdf');

		$zipFileName = 'resume-' . strtolower(date('M.d.Y-H.i.s')) . '.zip';
		$zipFilePath = public_path("zip/{$zipFileName}");

		Zipper::make($zipFilePath)->add([
			public_path('pdf/ranie-santos-resume-a.pdf'),
			public_path('pdf/ranie-santos-resume-b.pdf'),
		])->close();

		return response()
			->download($zipFilePath)
			->deleteFileAfterSend(true);
	}
}

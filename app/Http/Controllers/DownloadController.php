<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Zipper;

class DownloadController extends Controller
{

	public function download() {
		// public, no mobile number
		PDF::loadView('resume', ['mobile' => false])
			->save('pdf/ranie-santos-resume-a.pdf');

		// private, has mobile number
		PDF::loadView('resume', ['mobile' => true])
			->save('pdf/ranie-santos-resume-b.pdf');

		$zipName = 'resume-' . strtolower(date('M.d.Y-H.i.s')) . '.zip';
		$zipPath = public_path('zip/' . $zipName);

		Zipper::make($zipPath)->add([
			public_path('pdf/ranie-santos-resume-a.pdf'),
			public_path('pdf/ranie-santos-resume-b.pdf'),
		])->close();

		return response()
			->download($zipPath)
			->deleteFileAfterSend(true);
	}

}

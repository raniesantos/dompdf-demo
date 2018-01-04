<?php

namespace App\Http\Controllers;

use File;
use PDF;
use Zipper;

class DownloadController extends Controller
{
    public function download()
    {
        $filesDir = public_path('/files');
        
        if (!File::exists($filesDir)) {
            File::makeDirectory($filesDir);
        }
        
        // public, no mobile number
        PDF::loadView('resume', ['mobile' => false])
            ->save($pdfA = 'files/ranie-santos-resume-a.pdf');

        // private, has mobile number
        PDF::loadView('resume', ['mobile' => true])
            ->save($pdfB = 'files/ranie-santos-resume-b.pdf');

        $zipFilename = 'resume-' . strtolower(date('M.d.Y-H.i.s')) . '.zip';

        Zipper::make($zip = public_path('files/zip/' . $zipFilename))->add([
            public_path($pdfA),
            public_path($pdfB),
            public_path('files/checklist.txt'),
        ])->close();

        return response()
            ->download($zip)
            ->deleteFileAfterSend(true);
    }
}

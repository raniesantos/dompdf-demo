<?php

Route::get('/', 'HomeController@index');

Route::get('/preview/pdf', 'PreviewController@pdf');

Route::get('/preview/web', 'PreviewController@web');

Route::get('/download', 'DownloadController@download');

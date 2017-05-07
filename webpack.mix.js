const { mix } = require('laravel-mix');

mix.sass('resources/assets/sass/resume/resume-pdf.scss', 'public/css')
	.sass('resources/assets/sass/resume/resume-web.scss', 'public/css')
	.sass('resources/assets/sass/app.scss', 'public/css');

mix.browserSync('demopdf.app');

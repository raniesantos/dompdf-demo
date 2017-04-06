const { mix } = require('laravel-mix');

mix.sass('resources/assets/sass/resume/resume.scss', 'public/css')
	.sass('resources/assets/sass/app.scss', 'public/css');

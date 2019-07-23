const { mix } = require('laravel-mix');

/*
mix.sass('resources/assets/sass/resume/resume-pdf.scss', 'public/css')
    .sass('resources/assets/sass/resume/resume-web.scss', 'public/css')
    .sass('resources/assets/sass/app.scss', 'public/css');
*/

mix.browserSync({
    proxy: 'rezugenerator.test',
    files: [
        'app/**/*.php',
        'resources/views/**/*.php',
        'public/js/**/*.js',
        'public/css/**/*.css',
        '.env',
        'config/resume.php'
    ]
});

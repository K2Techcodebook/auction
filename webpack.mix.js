const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'public/css/vendor/simple-line-icons.css',
    'public/css/vendor/tooltipster.css',
    'public/css/vendor/owl.carousel.css',
    'public/css/style.css'
    ],
     'public/home/css/all.css');
mix.scripts([
    'public/js/vendor/jquery-3.1.0.min.js',
   'public/js/vendor/jquery.tooltipster.min.js',   
   'public/js/vendor/owl.carousel.min.js',
   'public/js/vendor/twitter/jquery.tweet.min.js',
   'public/js/vendor/jquery.xmalert.min.js',
   'public/js/vendor/side-menu.js',
   'public/js/home.js',   
   'public/js/tooltip.js',
   'public/js/user-board.js',
   'public/js/home-alerts.js',
   'public/js/footer.js'
], 'public/home/js/all.js');
let mix = require('laravel-mix');

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


mix.setPublicPath('./')


// Account
mix.js('js/young.js', 'js/young.min.js')
    .sass('sass/young/young.scss', 'css/young.min.css')
    .options({
        processCssUrls: false,
    });

// Version the files
if (mix.inProduction()) {
    mix.setPublicPath(`./`);
    mix.version([
        'js/young.min.js',
        'css/young.min.css',
    ]);
}



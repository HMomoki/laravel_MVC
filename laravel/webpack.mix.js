const mix = require('laravel-mix');

mix.setPublicPath('public');
mix.webpackConfig({
    stats: {
        children: true,
    },
});
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

mix.ts('resources/js/app.ts', 'public/js')
    .js('resources/js/header.js','public/js').vue()
    .js('resources/js/search.js','public/js').vue()
    .sass('resources/sass/app.scss', 'public/css');

const mix = require('laravel-mix');


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js('resources/js/app.js', 'public/js')
 .postCss('resources/css/app.css', 'public/css', [
        //
        ]);

 mix.js('resources/js/mdb.min.js', 'public/js')
 .postCss('resources/css/mdb.min.css', 'public/css');

 mix.js('resources/js/admin/main.js', 'public/js/admin')
 .postCss('resources/css/admin/main.css', 'public/css/admin');

  mix.js('resources/js/assets/navbar.js', 'public/js/assets')
 .postCss('resources/css/assets/navbar.css', 'public/css/assets');

  mix.js('resources/js/login/login.js', 'public/js/login')
 .postCss('resources/css/login/login.css', 'public/css/login');
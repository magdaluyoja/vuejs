let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.js('assets/src/js/intro.js', 'assets/dist/js/intro.min.js')
   .js('assets/src/js/bind.js', 'assets/dist/js/bind.min.js')
   .js('assets/src/js/conditional-rendering.js', 'assets/dist/js/conditional-rendering.min.js')
   .js('assets/src/js/list-rendering.js', 'assets/dist/js/list-rendering.min.js')
   .js('assets/src/js/event-handling.js', 'assets/dist/js/event-handling.min.js')
   .js('assets/src/js/class-style-binding.js', 'assets/dist/js/class-style-binding.min.js')
   .js('assets/src/js/computed-properties.js', 'assets/dist/js/computed-properties.min.js')
   .js('assets/src/js/components.js', 'assets/dist/js/components.min.js')
   .js('assets/src/js/communicating-events.js', 'assets/dist/js/communicating-events.min.js')


   .styles('assets/src/css/styles.css','assets/dist/css/styles.min.css');
;

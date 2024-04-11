const mix = require('laravel-mix');

mix.js([
   'resources/js/jquery-3.4.1.js',
   'resources/js/bootstrap.min.js',
   'resources/js/toastr.js',
   'resources/js/vue.js',
   'resources/js/axios.js',
   'resources/js/app.js'
], 'public/js/app.js').vue();


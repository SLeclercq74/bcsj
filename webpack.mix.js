let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue({
        version: 3,
    })
    .sass("resources/scss/app.scss", "public/css")
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

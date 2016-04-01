var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix
        .stylesIn("public/css", "public/css/app.css")
        .scripts([
            "_vendor/_jquery.min.js",
            "_vendor/tether.min.js",
            "_vendor/bootstrap.js",
            "_vendor/vue.min.js",
            "app/_forms.js",
            "app/_modals.js",
            "app/_tables.js",
            "app/app.js"
        ], "public/js/app.js")
        .version([
            "public/css/app.css",
            "public/js/app.js"
        ]);

});
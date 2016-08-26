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

elixir(function (mix) {
    mix.scripts([
        'header.js',
        'login_modal.js'
    ]);

    mix.styles([
        'header.css'
    ]);

    mix.styles([
        'register.css'
    ], 'public/css/register.css');

    mix.styles([
        'password.css'
    ], 'public/css/password.css');

    mix.version([
        'js/all.js',
        'css/register.css',
        'css/all.css',
        'css/password.css'
    ]);
});

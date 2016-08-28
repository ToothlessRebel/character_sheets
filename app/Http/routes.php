<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', 'Intro@index');
Route::get('/getHeader', 'Intro@header');

Route::get('/user/{username}', 'User@show');

Route::group(
    [
        'namespace'  => 'Api',
        'middleware' => 'auth:api',
    ],
    function () {
        Route::get('/api/games/', 'Games@index');
    }
);

Route::auth();

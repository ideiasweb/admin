<?php

use Illuminate\Support\Facades\Route;
use Ideiasweb\Admin\Middleware\AuthMiddleware;

Route::group([
    'prefix'    => 'admin',
    'as'        => 'admin.',
    'namespace' => 'Ideiasweb\\Admin\\Controllers',
], function () {

    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login')->name('login.post');
    Route::get('logout', 'LoginController@logout')->name('logout');

    Route::group(['middleware' => AuthMiddleware::class], function () {

        Route::get('/', 'HomeController@index')->name('home');

    });
});

<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::controller('auth/password', 'Auth\PasswordController', [
        'getEmail'=>'auth.password.email',
        'getReset'=>'auth.password.reset'
    ]);

    Route::controller('auth', 'Auth\AuthController', [
        'getLogin' => 'auth.login',
        'getLogout' => 'auth.logout'
    ]);

    Route::get('/backend/users/{users}/confirm', [ 'as' => 'backend.users.confirm', 'uses' => 'Backend\UsersController@confirm']);

    Route::resource('backend/users', 'Backend\UsersController', ['except' => ['show']]);

    Route::get('/backend/pages/{pages}/confirm', [ 'as' => 'backend.pages.confirm', 'uses' => 'Backend\PagesController@confirm']);

    Route::resource('backend/pages', 'Backend\PagesController');

    Route::get('backend/dashboard', [ 'as' => 'backend.dashboard', 'uses'=>'Backend\DashboardController@index']);

    Route::get('/', function () {

        return view('welcome');

    });

});

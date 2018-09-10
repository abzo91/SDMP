<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check()) {
        return view('home');
    } else {
        return view('auth.login');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify-user/{code}', 'Auth\ForgotPasswordController@activateUser')->name('activate.user');

Route::post('password/resets', [
    'as' => 'password.emailcustomized',
    'uses' => 'Auth\ForgotPasswordController@checkmailexists'
]);

Route::get('/alertbox', function () {
    return view('home');
});

Route::get('fireevent', 'NotificationsAll@index');

Route::get('administration', [
    'as' => 'administrator',
    'uses' => 'AdminPageController@index'
]);

Route::patch('administration', [
    'as' => 'administrator',
    'uses' => 'AdminPageController@update'
]);

Route::post('administration', [
    'as' => 'ldapupdate',
    'uses' => 'AdminPageController@autoupdate'
]);

Route::post('/notification/get', 'NotificationsAll@get');

Route::post('/notification/read', 'NotificationsAll@read');

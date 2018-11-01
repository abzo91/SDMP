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

Route::get('/', 'HomeController@index');

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

Route::get('fireevent', [
    'as' => 'fireevent',
    'uses' => 'NotificationsAll@index'
]);

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

Route::get('co_creation', [
    'as' => 'co_creation',
    'uses' => 'CallObservationController@index'
]);

Route::post('co_creation', [
    'as' => 'co_creation',
    'uses' => 'CallObservationController@create'
]);

Route::get('qos_creation', [
    'as' => 'qos_creation',
    'uses' => 'QOSDashboardController@index'
]);

Route::post('qos_creation', [
    'as' => 'qos_creation',
    'uses' => 'QOSDashboardController@store'
]);

Route::post('imageupload', [
    'as' => 'imageupload',
    'uses' => 'ImageUploadController@store'
]);

Route::post('ithdstars', [
    'as' => 'ithdstars',
    'uses' => 'ITHDStarsController@store'
]);

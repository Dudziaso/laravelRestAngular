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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'AngularController@serveApp');

    Route::get('/unsupported-browser', 'AngularController@unsupported');

});

//public API routes
$api->group(['middleware' => ['api']], function ($api) {

    // Authentication Routes...
    $api->post('auth/login', 'Auth\AuthController@login');
    $api->post('auth/register', 'Auth\AuthController@register');

    // Password Reset Routes...
    $api->post('auth/password/email', 'Auth\PasswordResetController@sendResetLinkEmail');
    $api->get('auth/password/verify', 'Auth\PasswordResetController@verify');
    $api->post('auth/password/reset', 'Auth\PasswordResetController@reset');

    
    //EmployeeController
    $api->post('employee/add', 'EmployeeController@add');
    $api->get('employee/remove', 'EmployeeController@remove');
    $api->post('employee/edit', 'EmployeeController@edit');
    $api->get('employee/getTotalHours', 'EmployeeController@getTotalHours');

    //TimeRegisterController
    $api->post('timeregister/register', 'TimeRegisterController@register');
    $api->post('timeregister/addManualTime', 'TimeRegisterController@addManualTime');

    //CalculateHoursController
    $api->post('calculateHours/fillWorkDay', 'CalculateHoursController@fillWorkDay');
    $api->get('calculateHours/calculateForMonth', 'CalculateHoursController@calculateForMonth');
    $api->get('calculateHours/getCurrentStatus', 'CalculateHoursController@getCurrentStatus');



});

//protected API routes with JWT (must be logged in)
$api->group(['middleware' => ['api', 'api.auth']], function ($api) {

});

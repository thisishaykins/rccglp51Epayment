<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/rccglp51-admin')->name('admin.')->namespace('Admin')->group(function(){

    // Route::get('/', 'DashboardController@index')->name('home');
	/**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){
        
        //Login Routes
        Route::get('login','LoginController@showLoginForm')->name('login');
        Route::post('login','LoginController@login');
        Route::post('logout','LoginController@logout')->name('logout');
        //Register Routes
        Route::get('register','RegisterController@showRegistrationForm')->name('register');
        Route::post('register','RegisterController@register');
        //Forgot Password Routes
        Route::get('password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        //Reset Password Routes
        Route::get('password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset','ResetPasswordController@reset')->name('password.update');
        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');
    });

	// Auth::routes();
	// Route::get('/home', 'DashboardController@index')->name('home')->middleware('auth:admin');

	Route::group(['middleware' => 'auth:admin'], function () {
		// Route::get('/login');
		Route::get('/home', 'DashboardController@index')->name('home');
		// Route::resource('user', 'UserController', ['except' => ['show']]);
		Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
		Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
		Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	});

});
/* ----------------------- Admin Routes END -------------------------------- */
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

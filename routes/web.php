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

Route::get('/', 'FrontController@index')->name('index');
Route::get('events', 'FrontController@events')->name('events');
Route::get('contact', 'FrontController@contact')->name('contact');
Route::get('about', 'FrontController@about')->name('about');
Route::get('gallery', 'FrontController@gallery')->name('gallery');







// Password Reset Routes...
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset', 'Auth\ResetPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Guest Routes
Route::group(['namespace' => 'Auth', 'middleware' => ['guest']], function () {
    Route::get('login', 'AuthController@login')->name('login');
    Route::post('login', 'AuthController@doLogin')->name('web.do.login');
    Route::get('register', 'AuthController@register')->name('web.register');
    Route::post('register', 'AuthController@doRegister')->name('web.do.register');
});
// Auth Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('logout', 'Auth\AuthController@logout')->name('logout');

    Route::get('dashboard', 'Dashboard\MainDashboardController@dashboard')->name('dashboard.main');

    // Profile
    Route::get('password-reset', 'Auth\AuthController@reset')->name('profile.password.reset');
    Route::post('password-reset', 'Auth\AuthController@doReset')->name('password.doReset');
    Route::get('profile', 'User\ProfileController@profile')->name('profile');
    Route::post('profile', 'User\ProfileController@profileUpdate')->name('profile.update');
    Route::get('profile-pic-change', 'User\ProfileController@profilePicChange')->name('profile.pic.change');
    Route::post('profile-pic-change', 'User\ProfileController@doProfilePicChange')->name('profile.pic.update');

});


/*
 * Testing phase only
 * Strictly Prohibited For Productions
 */
Route::get('test/login/{id}', 'Auth\AuthController@loginUsingId')->name('test.login');

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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', 'HomeController@index');
Route::get('/user/{user}/detail', 'HomeController@userDetail')->name('user.detail.frontend')->middleware('auth');

//  user job controller
Route::get('user/{job}/apply', 'HomeController@applyJob')->name('job.user.apply');
Route::get('user/appliedjob', 'HomeController@listAppliedJobs')->name('job.user.applied');


Auth::routes();

Route::get('/home', 'UserController@home')->name('home');
Route::any('/profile/update', 'UserController@update')->name('user.profile.update');
Route::get('/job/{slug}/detail', 'HomeController@jobDetail')->name('job.detail.frontend');


Route::prefix('employer')->group(function() {
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register.form');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.home');

    /**
     * Admin Job routes
     */
    Route::get('/job/list', 'Admin\JobController@listJobs')->name('admin.job.list');
    Route::any('/job/create', 'Admin\JobController@create')->name('admin.job.create');
    Route::any('/job/{id}/update', 'Admin\JobController@create')->name('admin.job.update');
    Route::any('/job/{id}/delete', 'Admin\JobController@delete')->name('admin.job.delete');

    /**
     * Admin Job matching route
     */
    Route::get('/job/{job}/match', 'Admin\JobController@matchJob')->name('admin.job.match');
    Route::get('/about','HomeController@about')->name('about');

});

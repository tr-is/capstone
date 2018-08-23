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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
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
});
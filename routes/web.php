<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@redirectAdmin')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

// Admin Route Group
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
    // Roles
    Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    // Users
    Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    // Admins Route
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);


    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');
    // Logout Routes
    Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');
    // Forget Password Routes
    // Route::get('/password/reset', 'Backend\Auth\ForgetController@showLinkRequestForm')->name('admin.password.request');
    // Route::post('/logout/submit', 'Backend\Auth\ForgetController@logout')->name('admin.password.update');



});

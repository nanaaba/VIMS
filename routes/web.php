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

    return view('login');
});
Route::get('/logout', function() {
    Session::flush();

    return redirect('/');
});

Route::get('/users/changepassword', function () {

    return view('changepassword');
});
Route::get('/users', function () {

    return view('users');
});
Route::get('/dashboard', function () {

    return view('dashboard');
});

Route::get('/analytics', function () {

    return view('analyticsreport');
});

Route::get('/reports', function () {

    return view('generalreport');
});

Route::get('/audits', function () {

    return view('auditslogs');
});

Route::get('/agentcases', function () {

    return view('agentcases');
});

//agentcases
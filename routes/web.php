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
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepages.index');
});

Route::get('/news', function () {
    return view('homepages.news');
});

Route::get('/news/article', function () {
    return view('homepages.news_article');
});

Route::get('/profile', function () {
    return view('homepages.profile');
});

Route::get('/schedule', function () {
    return view('homepages.schedule');
});

Route::get('/guideline', function () {
    return view('homepages.guideline');
});

Route::get('/signin', function () {
    return view('admins.signin');
});

Route::get('/admin', function () {
    return view('admins.admin_home');
});

Route::get('/admin/news', function () {
    return view('admins.admin_news');
});

Route::get('/admin/schedule', function () {
    return view('admins.admin_schedule');
});

Route::get('/admin/profile', function () {
    return view('admins.admin_profile');
});

Route::get('/admin/profile/user', function () {
    return view('admins.admin_user');
});

Route::get('/admin/profile/register', function () {
    return view('admins.admin_user_register');
});


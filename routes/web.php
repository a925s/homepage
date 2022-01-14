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

Route::get('/home', 'HomeController@getHome');

Route::get('/news', 'ArticleController@getNews');

Route::get('/news/article/{id}', 'ArticleController@getNewsArticle');

Route::get('/profile', function () {
    return view('homepages.profile');
});

Route::get('/schedule', function () {
    return view('homepages.schedule');
});

Route::get('/guideline', 'GuidelineController@getGuideline');

Route::get('/signin', function () {
    return view('admins.signin');
});

Route::get('/admin', function () {
    return view('admins.admin_home');
});

Route::get('/admin/news', 'ArticleController@getAdminNews');

Route::post('/admin/news', 'ArticleController@createArticle');

Route::get('/admin/news/article/{id}', 'ArticleController@getEditNewsArticle');

Route::post('/admin/news/article/{id}', 'ArticleController@updateArticle');

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

Route::get('/admin/guideline', 'GuidelineController@getAdminGuideline');

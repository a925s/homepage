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

Route::get('/profile', 'ProfileController@getHomeProfile');

Route::get('/profile/{id}', 'UserController@getUserProfile');

Route::get('/schedule', 'ScheduleController@getSchedule');

Route::get('/guideline', 'GuidelineController@getGuideline');

Route::get('/signin', function () {
    return view('admins.signin');
});

Route::get('/admin', function () {
    return view('admins.admin_home');
});

Route::get('/admin/news', 'ArticleController@getAdminNews');

Route::post('/admin/news', 'ArticleController@createArticle');

Route::post('/admin/news/delete', 'ArticleController@deleteArticle');

Route::get('/admin/news/article/{id}', 'ArticleController@getEditNewsArticle');

Route::post('/admin/news/article/{id}', 'ArticleController@updateArticle');

Route::get('/admin/schedule', 'ScheduleController@getAdminSchedule');

Route::post('/admin/schedule', 'ScheduleController@createSchedule');

Route::get('/admin/schedule/{id}', 'ScheduleController@getEditSchedule');

Route::post('/admin/schedule/{id}', 'ScheduleController@updateSchedule');

Route::post('/admin/schedule/delete', 'ScheduleController@deleteSchedule');

Route::get('/admin/profile', 'ProfileController@getAdminProfile');

Route::post('/admin/profile', 'ProfileController@updateGroupProfile');

Route::get('/admin/profile/user/{id}', 'UserController@getEditUser');

Route::post('/admin/profile/user/{id}', 'UserController@updateUser');

Route::post('/admin/profile/user/delete', 'UserController@deleteUser');

Route::post('/admin/profile/add/task', 'TaskController@createTask');

Route::post('/admin/profile/task/delete', 'TaskController@deleteTask');

Route::get('/admin/profile/register', function () {
    return view('admins.admin_user_register');
});

Route::post('/admin/profile/register', 'UserController@createUser');

Route::get('/admin/guideline', 'GuidelineController@getAdminGuideline');

Route::post('/admin/guideline', 'GuidelineController@updateGuideline');

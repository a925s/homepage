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
    return view('admins.signin');
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

Route::post('/signin', 'SigninSignoutController@signin');

Route::get('/admin', function () {
    return view('admins.admin_home');
})->middleware('simple_auth');

Route::post('/admin', 'SigninSignoutController@signout')->middleware('simple_auth');

Route::get('/admin/news', 'ArticleController@getAdminNews')->middleware('simple_auth');

Route::post('/admin/news', 'ArticleController@createArticle')->middleware('simple_auth');

Route::post('/admin/news/delete', 'ArticleController@deleteArticle')->middleware('simple_auth');

Route::get('/admin/news/article/{id}', 'ArticleController@getEditNewsArticle')->middleware('simple_auth');

Route::post('/admin/news/article/{id}', 'ArticleController@updateArticle')->middleware('simple_auth');

Route::get('/admin/schedule', 'ScheduleController@getAdminSchedule')->middleware('simple_auth');

Route::post('/admin/schedule', 'ScheduleController@createSchedule')->middleware('simple_auth');

Route::get('/admin/schedule/{id}', 'ScheduleController@getEditSchedule')->middleware('simple_auth');

Route::post('/admin/schedule/{id}', 'ScheduleController@updateSchedule')->middleware('simple_auth');

Route::post('/admin/schedule/delete', 'ScheduleController@deleteSchedule')->middleware('simple_auth');

Route::get('/admin/profile', 'ProfileController@getAdminProfile')->middleware('simple_auth');

Route::post('/admin/profile', 'ProfileController@updateGroupProfile')->middleware('simple_auth');

Route::get('/admin/profile/user/{id}', 'UserController@getEditUser')->middleware('simple_auth');

Route::post('/admin/profile/user/{id}', 'UserController@updateUser')->middleware('simple_auth');

Route::post('/admin/profile/user/delete', 'UserController@deleteUser')->middleware('simple_auth');

Route::post('/admin/profile/add/task', 'TaskController@createTask')->middleware('simple_auth');

Route::post('/admin/profile/task/delete', 'TaskController@deleteTask')->middleware('simple_auth');

Route::get('/admin/profile/register', function () {
    return view('admins.admin_user_register');
})->middleware('simple_auth');

Route::post('/admin/profile/register', 'UserController@createUser')->middleware('simple_auth');

Route::get('/admin/guideline', 'GuidelineController@getAdminGuideline')->middleware('simple_auth');

Route::post('/admin/guideline', 'GuidelineController@updateGuideline')->middleware('simple_auth');

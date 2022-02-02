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

Route::get('/game-homepage/home', 'HomeController@getHome');

Route::get('/game-homepage/home/next', 'HomeController@getHomeNext');

Route::get('/game-homepage/news', 'ArticleController@getNews');

Route::get('/game-homepage/news/article/{id}', 'ArticleController@getNewsArticle');

Route::get('/game-homepage/profile', 'ProfileController@getHomeProfile');

Route::get('/game-homepage/profile/{id}', 'UserController@getUserProfile');

Route::get('/game-homepage/schedule', 'ScheduleController@getSchedule');

Route::get('/game-homepage/guideline', 'GuidelineController@getGuideline');

Route::get('/game-homepage/signin', function () {
    return view('admins.signin');
});

Route::post('/game-homepage/signin', 'SigninSignoutController@signin');

Route::get('/game-homepage/admin', function () {
    return view('admins.admin_home');
})->middleware('simple_auth');

Route::post('/game-homepage/admin', 'SigninSignoutController@signout')->middleware('simple_auth');

Route::get('/game-homepage/admin/news', 'ArticleController@getAdminNews')->middleware('simple_auth');

Route::post('/game-homepage/admin/news', 'ArticleController@createArticle')->middleware('simple_auth');

Route::post('/game-homepage/admin/news/delete', 'ArticleController@deleteArticle')->middleware('simple_auth');

Route::get('/game-homepage/admin/news/article/{id}', 'ArticleController@getEditNewsArticle')->middleware('simple_auth');

Route::post('/game-homepage/admin/news/article/{id}', 'ArticleController@updateArticle')->middleware('simple_auth');

Route::get('/game-homepage/admin/schedule', 'ScheduleController@getAdminSchedule')->middleware('simple_auth');

Route::post('/game-homepage/admin/schedule', 'ScheduleController@createSchedule')->middleware('simple_auth');

Route::post('/game-homepage/admin/schedule/delete/{id}', 'ScheduleController@deleteSchedule')->middleware('simple_auth');

Route::get('/game-homepage/admin/profile', 'ProfileController@getAdminProfile')->middleware('simple_auth');

Route::post('/game-homepage/admin/profile', 'ProfileController@updateGroupProfile')->middleware('simple_auth');

Route::get('/game-homepage/admin/profile/user/{id}', 'UserController@getEditUser')->middleware('simple_auth');

Route::post('/game-homepage/admin/profile/user/{id}', 'UserController@updateUser')->middleware('simple_auth');

Route::post('/game-homepage/admin/profile/user/delete/{id}', 'UserController@deleteUser')->middleware('simple_auth');

Route::post('/game-homepage/admin/profile/add/task', 'TaskController@createTask')->middleware('simple_auth');

Route::post('/game-homepage/admin/profile/task/delete', 'TaskController@deleteTask')->middleware('simple_auth');

Route::get('/game-homepage/admin/profile/register', function () {
    return view('admins.admin_user_register');
})->middleware('simple_auth');

Route::post('/game-homepage/admin/profile/register', 'UserController@createUser')->middleware('simple_auth');

Route::get('/game-homepage/admin/guideline', 'GuidelineController@getAdminGuideline')->middleware('simple_auth');

Route::post('/game-homepage/admin/guideline', 'GuidelineController@updateGuideline')->middleware('simple_auth');

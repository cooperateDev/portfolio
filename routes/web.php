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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend
Route::get('/', 'Frontend\HomeController@index');

//Auth
Route::get('admin/login', 'Auth\LoginController@index')->name('login')	;
Route::post('admin/login', 'Auth\LoginController@login');
Route::get('admin/logout', 'Auth\LoginController@logout');
Route::get('admin/signup', 'Auth\RegisterController@index')->name('signup');
Route::post('admin/signup', 'Auth\RegisterController@create');

/**
 * Backend routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    

    // Dashboard
    Route::get('/', 'DashboardController@index');

    // Member Management
    Route::get('/member', 'MemberController@index');
    Route::post('/member_add', 'MemberController@member_add');
    Route::get('/member_info/{id}', 'MemberController@member_info');
    Route::get('/member_del/{id}', 'MemberController@member_del');
	Route::post('/member_edit/{id}', 'MemberController@member_edit');

	// Category Management
    Route::get('/category', 'CategoryController@index');
    Route::post('/category_add', 'CategoryController@category_add');
    Route::get('/category_info/{id}', 'CategoryController@category_info');
    Route::get('/category_del/{id}', 'CategoryController@category_del');
	Route::post('/category_edit/{id}', 'CategoryController@category_edit');

	// Task Management
    Route::get('/task', 'TaskController@index');
    Route::post('/task_add', 'TaskController@task_add');
    Route::get('/task_info/{id}', 'TaskController@task_info');
    Route::get('/task_del/{id}', 'TaskController@task_del');
	Route::post('/task_edit/{id}', 'TaskController@task_edit');

	// Slide Management
    Route::get('/slide', 'SlideController@index');
    Route::post('/slide_add', 'SlideController@slide_add');
    Route::get('/slide_del/{order}', 'SlideController@slide_del');

    // //Users
    // Route::get('users', 'UserController@index')->name('users');
    // Route::get('users/restore', 'UserController@restore')->name('users.restore');
    // Route::get('users/{id}/restore', 'UserController@restoreUser')->name('users.restore-user');
    // Route::get('users/{user}', 'UserController@show')->name('users.show');
    // Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    // Route::put('users/{user}', 'UserController@update')->name('users.update');
    // Route::any('users/{id}/destroy', 'UserController@destroy')->name('users.destroy');
    // Route::get('permissions', 'PermissionController@index')->name('permissions');
    // Route::get('permissions/{user}/repeat', 'PermissionController@repeat')->name('permissions.repeat');
    // Route::get('dashboard/log-chart', 'DashboardController@getLogChartData')->name('dashboard.log.chart');
    // Route::get('dashboard/registration-chart', 'DashboardController@getRegistrationChartData')->name('dashboard.registration.chart');
});


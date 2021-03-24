<?php

use Illuminate\Support\Facades\Route;

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

Route::namespace('Client')->group(function () {
	Route::get('/', 'RegisterCourseController@index')->name('client.register-course.index');
	Route::post('register-course', 'RegisterCourseController@store')->name('client.register-course.store');
	Route::get('demo/sendmail', 'RegisterCourseController@senDemoMail');
});


Route::namespace('Admin')->group(function () {
	Route::resource('admin/register-course', 'RegisterCourseController', [
		'names' => [
			'index' => 'admin.register-course.index',
			'store' => 'admin.register-course.store',
			'update' => 'admin.register-course.update',
			'create' => 'admin.register-course.create',
			'show' => 'admin.register-course.show',
			'edit' => 'admin.register-course.edit',
			'destroy' => 'admin.register-course.destroy',
		]
	]);
	Route::get('admin/register-course-action', 'RegisterCourseController@action')->name('admin.register-course.action');
});

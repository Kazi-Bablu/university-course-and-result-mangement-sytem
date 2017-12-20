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

Route::middleware('auth')->group(function(){


    Route::get('/','PagesController@index');
    Route::get('/dashboard','PagesController@admin');
    Route::get('/blank','PagesController@dashboard');

 /*   Departments Route*/
    Route::get('/Admin/Department/Create','DepartmentController@create');
    Route::post('Admin/Department/store','DepartmentController@store');
    Route::get('/Admin/Department/index','DepartmentController@index');
    Route::get('/Admin/Department/{id}/edit','DepartmentController@edit');
    Route::post('/Admin/Department/{id}/update','DepartmentController@update');
    Route::get('/Admin/Department/{id}/delete','DepartmentController@delete');

    /*Course  Route*/

    Route::get('/admin/course/create','CourseController@create');
    Route::post('/Admin/course/store','CourseController@store');
    Route::get('Admin/course/index','CourseController@index');
    Route::get('/Admin/course/{id}/edit','CourseController@edit');
    Route::post('/Admin/course/{id}/update','CourseController@update');
    Route::get('/Admin/course/{id}/delete','CourseController@delete');

    /*Teacher Route*/
    Route::get('/admin/teacher/create','TeacherController@create');
    Route::post('/Admin/teacher/store','TeacherController@store');
    Route::get('/Admin/teacher/index','TeacherController@index');
    Route::get('/Admin/teacher/{id}/edit','TeacherController@edit');
    Route::post('/Admin/teacher/{id}/update','TeacherController@update');
    Route::get('/Admin/teacher/{id}/delete','TeacherController@destroy');
    /*Course Assign Route*/
    Route::get('/admin/courseAssignTo/create','CourseAssignTo@create');
    Route::post('/Admin/courseAssignTo/store','CourseAssignTo@store');
    Route::get('/teacher/course/dropdown/{id}','CourseAssignTo@ajaxTeacher');





});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/generate/passwored',function(){
    return bcrypt('admin123456');
});*/

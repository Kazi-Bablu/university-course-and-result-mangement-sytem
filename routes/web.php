<?php

/*use Illuminate\Http\Request;

Route::get('/search/students', function (Request $request) {
    return App\Order::search($request->search)->get();
});*/

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
Route::get('/','PagesController@index');
Route::middleware('auth')->group(function(){



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
    Route::get('/admin/courseAssignTo/create','CourseAssignToController@create');
    Route::post('/Admin/courseAssignTo/store','CourseAssignToController@store');
    Route::get('/Admin/courseAssignTo/index','CourseAssignToController@index');
    Route::get('/teacher/course/dropdown/{id}','CourseAssignToController@ajaxTeacher');
    Route::get('/teacher/credit/{id}','CourseAssignToController@ajaxTeacherCredit');
    Route::get('/course/credit/{id}','CourseAssignToController@ajaxCourseName');
    Route::get('courseAjax/{id}','CourseAssignToController@ajaxCourseAssignTo');

    /*Student Route*/
    Route::get('/admin/students/create','StudentController@create');
    Route::post('/admin/students/store','StudentController@store');
    Route::get('/Admin/students/index','StudentController@index');
    Route::get('/Admin/students/{id}/edit','StudentController@edit');
    Route::post('/admin/students/{id}/update','StudentController@update');
    Route::get('/Admin/students/{id}/delete','StudentController@destroy');

    /*Allocate classrooms*/
    Route::get('/admin/allocateClassrooms/create','AllocateClassroomController@create');
    Route::post('/admin/allocateClassrooms/store','AllocateClassroomController@store');
    Route::get('/Admin/allocateClassrooms/index','AllocateClassroomController@index');
   /* Route::get('/department','AllocateClassroomController@ajaxRoom');*/
    Route::get('roomAjax/{id}','AllocateClassroomController@ajaxRoom');

/*Enroll in a course route*/

    Route::get('/admin/enrollCourse/create','EnrollCourseController@create');
    Route::post('/admin/enrollCourse/store','EnrollCourseController@store');
    Route::get("/autocomplete",array('as'=>'autocomplete','uses'=> 'EnrollCourseController@autocomplete'));
    Route::get('/course','EnrollCourseController@ajaxCourse');
    Route::get('/Admin/enrollCourse/index','EnrollCourseController@index');
    Route::get('Admin/enrollCourse/{id}/delete','EnrollCourseController@destroy');

    /*Save Student Result*/
    Route::get('/admin/saveResult/create','SaveStudentResultController@create');
    Route::get("autocomplete/result",array('as'=>'autocomplete/result','uses'=> 'SaveStudentResultController@autocompleteResult'));
    Route::post("/admin/saveResult/store","SaveStudentResultController@store");
    Route::get("/Admin/saveResult/index","SaveStudentResultController@index");
    Route::get("/Admin/saveResult/{id}/edit","SaveStudentResultController@edit");
    Route::post("/admin/saveResult/{id}/update","SaveStudentResultController@update");
    Route::get("/Admin/saveResult/{id}/delete","SaveStudentResultController@destroy");
    /*Show result */
    Route::get("/admin/Result/search","SearchResultController@create");
    Route::get("/index","SearchResultController@search");
    Route::get('/downloadPDF/','UserDetailController@downloadPDF');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/generate/passwored',function(){
    return bcrypt('admin123456');
});*/

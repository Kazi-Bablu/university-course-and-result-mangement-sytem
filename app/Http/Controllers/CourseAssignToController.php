<?php

namespace App\Http\Controllers;

use App\AllocateClassroom;
use App\Course;
use App\CourseAssignTo;
use App\Departments;
use App\Teacher;
use Illuminate\Http\Request;
use Session;

class CourseAssignToController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Departments::all();
        $course=Course::all();
        $teacher=Teacher::all();
        //dd($department);
        return view('Admin.courseAssignTo.index',['department'=>$department,'course'=>$course,'teacher'=>$teacher]);
    }


    public function ajaxCourseAssignTo($id)
    {
        $courseAssin = CourseAssignTo::where('department_id',$id)->with('course','teacher')->get();
        return response()->json($courseAssin);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Departments::orderBy('id', 'DESC')->get();
        $course = Course::orderBy('id', 'DESC')->get();

        //  dd($department);

        return view('Admin.courseAssignTo.create')
            ->with('department', $department)
            ->with('course', $course);
    }

    public function ajaxTeacher($id)
    {
        $teacher = Teacher::where('department_id', $id)->get();
        return response()->json($teacher);
    }

    public function ajaxTeacherCredit($id)
    {
        $teacher = Teacher::where('id', $id)->get();
        return response()->json($teacher);
    }

    public function ajaxCourseName($id)
    {
        $course = Course::where('id', $id)->get();
        return response()->json($course);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'department_id' => 'required',
            'teacher' => 'required',
            'credit_taken' => 'required',
            'course' => 'required',
            'C_name' => 'required',
            'course_credit' => 'required',
            'remain_credit' => 'required',
        ]);

        $obj = new CourseAssignTo();
        $obj->department_id = $request->department_id;
        $obj->teacher = $request->teacher;
        $obj->credit_taken = $request->credit_taken;
        $obj->course = $request->course;
        $obj->C_name = $request->C_name;
        $obj->course_credit = $request->course_credit;
        $obj->remain_credit = $request->remain_credit;
        $obj->save();

        //dd($obj);
        Session::flash('message', 'Course Assign to Teacher Successfully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Course;
use App\Departments;
use App\EnrollCourses;
use App\Student;
use Illuminate\Http\Request;
use Session;

class EnrollCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        $enroll =EnrollCourses::orderBy('s_name')->with('course_name');
        $s_name = $request->input('s_name');
        if(!empty($s_name))
        {
            $enroll->where('s_name','LIKE','%'.$s_name.'%');
        }
        $enroll=$enroll->paginate(10);
        //dd($enroll);
        return view('Admin.enrollCourse.index',['enroll'=>$enroll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.enrollCourse.create');
    }

    public function autocomplete(Request $request)
    {
        $term = $request->term;
        $data = Student::where('reg_id', 'LIKE', '%' . $term . '%')->with('department')
            ->take(10)
            ->get();

        $result = array();
        foreach ($data as $key => $v)  {
            $dep_id =  $v->department['id'];
            $course = Course::where('department_id',$dep_id)->get();
            $result[] = ['reg_id' => $v->reg_id, 's_name' => $v->s_name,
                'email' => $v->email,'department_id'=> $v->department['id'],
                'department_name' => $v->department['name'],
                'course_id'=>$course,

            ];
        }
        return response()->json($result);
    }

    /*  public function ajaxCourse($id)
      {
          $course = Course::where('department_id',$id)->get();
          return response()->json($course);
      }*/


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'reg_num'=>'required',
            's_name'=>'required',
            'email'=>'required',
            'department_id'=>'required',
            'course_id'=>'required',
            'date'=>'required'
        ]);
        //dd($request);
        $obj = new EnrollCourses();
        $obj->reg_num=$request->reg_num;
        $obj->s_name=$request->s_name;
        $obj->email=$request->email;
        $obj->department_id=$request->department_id;
        $obj->course_id=$request->course_id;
        $obj->date=$request->date;
        //dd($obj);
        $obj->save();
        Session::flash('message','Course Enroll Successfully......!!');
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
        $data = EnrollCourses::find($id);
        $data->delete();
        Session::flash('message','Enroll Course Delete Successfully......!!');
    }
}

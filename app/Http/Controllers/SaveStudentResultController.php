<?php

namespace App\Http\Controllers;

use App\EnrollCourses;
use App\Course;
use App\SaveStudentResult;
use Session;
use Illuminate\Http\Request;
class SaveStudentResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $saveResult = SaveStudentResult::with('course');
        $st_name = $request->input('st_name');
        if(!empty($st_name))
        {
            $saveResult->where('st_name','LIKE','%'.$st_name.'%');
        }
        $saveResult = $saveResult->paginate(10);
        return view('Admin.saveResult.index')->with('saveResult',$saveResult);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.saveResult.create');
    }

    public function autocompleteResult(Request $request)
    {
        $term = $request->term;
        $data = EnrollCourses::where('reg_num', 'LIKE', '%'.$term.'%')->take(10)->get();

        $result = array();
        $i = 0;
        foreach ($data as $v) {
            $course_id = $v->course_name;
            $result[$i] = ['reg_num' => $v->reg_num, 's_name' => $v->s_name,
                'email' => $v->email, 'department_id' => $v->department_id,
                'course_id' => $course_id,
            ];

            $i++;
        }
       /* $result['course_id'] = Course::where('id','=','course_id')-get();*/
        //dd($result);
        return  response([$result]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'reg_number'=>'required',
            'st_name'=>'required',
            'email_ad'=>'required',
            'department_na'=>'required',
            'course_id'=>'required',
            'grade'=>'required',
        ]);
        $obj = new SaveStudentResult();
        $obj->reg_number=$request->reg_number;
        $obj->st_name=$request->st_name;
        $obj->email_ad=$request->email_ad;
        $obj->department_na=$request->department_na;
        $obj->course_id=$request->course_id;
        $obj->grade=$request->grade;
        $obj->save();
        Session::flash('message','Student Result Add Successfully..........!!!');
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
        $course = Course::all();
        $data = SaveStudentResult::find($id);
        return view('Admin.saveResult.edit')
                     ->with('data',$data)
                     ->with('course',$course);
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
        $this->validate($request,[
            'reg_number'=>'required',
            'st_name'=>'required',
            'email_ad'=>'required',
            'department_na'=>'required',
            'course_id'=>'required',
            'grade'=>'required',
        ]);
        $obj = new SaveStudentResult();
        $obj->reg_number=$request->reg_number;
        $obj->st_name=$request->st_name;
        $obj->email_ad=$request->email_ad;
        $obj->department_na=$request->department_na;
        $obj->course_id=$request->course_id;
        $obj->grade=$request->grade;
        $obj->save();
        Session::flash('message','Student Result Update Successfully..........!!!');
        return redirect(Admin/saveResult/index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SaveStudentResult::find($id);
        $data->delete();
        Session::flash('message','Student Delete Successfully......!!');
        return back();
    }
}

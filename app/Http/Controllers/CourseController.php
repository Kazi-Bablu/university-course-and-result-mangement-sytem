<?php

namespace App\Http\Controllers;

use App\Departments;
use Illuminate\Http\Request;
use App\Course;

use Session;


class CourseController extends Controller
{

    /*Course create*/
    public function create()
    {
        $department = Departments::all();
        return view ('Admin.course.create')
            ->with('department',$department);

    }

    /*Course index*/
    public function index()
    {

        $allCourse = Course::with('departments','name')->paginate(15);

        //dd($allCourse);

        return view ('Admin.course.index',['allCourse'=> $allCourse]);

    }

    /*Course store*/
    public function store(Request $request)
    {
        $this->validate($request,[
            'code'=>'required|min:5|max:10',
            'name'=>'required',
            'credit'=>'required|min:0.5|max:5.0',
            'description'=>'required',
            'department'=>'required',
            'semester'=>'required'
        ]);
        $obj = new Course();
        $obj ->code = $request->code;
        $obj->name=$request->name;
        $obj->credit=$request->credit;
        $obj->description=$request->description;
        $obj->department_id=$request->department;
        $obj->semester=$request->semester;
        $obj->save();
        Session::flash('message','Course Add Successfully.....!');
        return redirect()->back();
    }
    /*Course Edit*/
    public function edit($id)
    {
       $department = Departments::pluck('name','code');
        $data = Course::find($id);
        return view('Admin.course.edit')
            ->with('data',$data)
           ->with('department',$department);

    }

    /*Course update*/
    public function  update(Request $request , $id)
    {
        $this->validate($request,[
            'code'=>'required|min:5|max:10',
            'name'=>'required',
            'credit'=>'required|min:0.5|max:5.0',
            'description'=>'required',
            'department'=>'required',
            'semester'=>'required'
        ]);
        $exitData = Course::find($id);
       // dd($exitData);
        $exitData->code=$request->code;
        $exitData->name=$request->name;
        $exitData->credit=$request->credit;
        $exitData->description=$request->description;
        $exitData->department_id=$request->department;
        $exitData->semester=$request->semester;
        $exitData->save();
        session::flash('message','Course add Successfully.....!');
        return  redirect('Admin/course/index');

    }



    /*Course delete*/
    public function delete($id)
    {
        $data = Course::find($id);
        $data->delete();
        Session::flash('message','Course Delete Successfully........!!!');
        return back();
    }

}

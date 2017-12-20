<?php

namespace App\Http\Controllers;

use App\Departments;
use App\Teacher;
use Illuminate\Http\Request;
use Session;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTeacher = Teacher::with('department')->paginate(10);
        //dd($allTeacher);
        return view('Admin/teacher/index',['allTeacher'=> $allTeacher]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Departments::all();
        return view('Admin/teacher/create')
            ->with('department',$department);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required|max:11',
            'department'=>'required',
            'designation'=>'required',
            'credit'=>'required|numeric|max:25'
        ]);
        $obj = new Teacher();
        $obj->name= $request->name;
        $obj->address=$request->address;
        $obj->email=$request->email;
        $obj->phone=$request->phone;
        $obj->department_id=$request->department;
        $obj->designation=$request->designation;
        $obj->credit=$request->credit;
        $obj->save();
        //dd($obj);
        Session::flash('message','Teacher Add Successfully....!!!');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Departments::pluck('name');
        $data = Teacher::find($id);
        return view('Admin/teacher/edit' )
            ->with('data',$data)
           ->with('department',$department);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $this->validate($request,[
                'name'=>'required',
                'address'=>'required',
                'email'=>'required',
                'phone'=>'required|max:11',
                'department'=>'required',
                'designation'=>'required',
                'credit'=>'required|numeric|max:25'
            ]);
        $exitData = Teacher::find($id);
        $exitData->name= $request->name;
        $exitData->address=$request->address;
        $exitData->email=$request->email;
        $exitData->phone=$request->phone;
        $exitData->department_id=$request->department;
        $exitData->designation=$request->designation;
        $exitData->credit=$request->credit;
        $exitData->save();
        //dd($obj);
        Session::flash('message','Teacher Update  Successfully....!!!');
        return redirect('Admin/teacher/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Teacher::find($id);
        $data->delete();
        Session::flash('message','Teacher Delete Successfully.......!!!');
        return back();
    }
}

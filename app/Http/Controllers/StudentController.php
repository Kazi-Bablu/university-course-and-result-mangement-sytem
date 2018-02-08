<?php

namespace App\Http\Controllers;

use App\Departments;
use App\Student;
use Illuminate\Http\Request;
use Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allStd = Student::orderBy('s_name')->with('department');
        $s_name = $request->input('s_name');
        if(!empty($s_name))
        {
            $allStd->where('s_name','LIKE','%'.$s_name.'%');
        }
        $allStd=$allStd->paginate(10);
        //dd($allStd);
        return view ('Admin.students.index',['allStd'=> $allStd]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Departments::all();
            //dd($department);
            return view ('Admin.students.create')
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
            'reg_id'=>'required|max:7',
            'name'=>'required|max:40',
            'email'=>'required',
            'number'=>'required|max:11',
            'date'=>'required',
            'address'=>'required|max:40',
            'department'=>'required'
        ]);
        $obj = new Student();
        $obj->reg_id=$request-> reg_id;
        $obj->s_name = $request->name;
        $obj->email=$request->email;
        $obj->number=$request->number;
        $obj->date=$request->date;
        $obj->address=$request->address;
        $obj->department_id=$request->department;
        $obj->save();
        Session::flash('message','Student Add Successfully..........!!!');
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
        $department = Departments::all();
        $data = Student::find($id);
        return view('Admin.students.edit')
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
            'reg_id'=>'required|max:7',
            's_name'=>'required|max:40',
            'email'=>'required',
            'number'=>'required|max:11',
            'date'=>'required',
            'address'=>'required|max:40',
            'department'=>'required'
        ]);
        $exitData =Student::find($id);
        $exitData->reg_id = $request->reg_id;
        $exitData->s_name = $request->s_name;
        $exitData->email=$request->email;
        $exitData->number=$request->number;
        $exitData->date=$request->date;
        $exitData->address=$request->address;
        $exitData->department_id=$request->department;
        $exitData->save();
        Session::flash('message','Student Update Successfully..........!!!');
        return redirect('Admin/students/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Student::find($id);
        $data->delete();
        Session::flash('message','Student Delete Successfully..........!!');
        return back();
    }
}

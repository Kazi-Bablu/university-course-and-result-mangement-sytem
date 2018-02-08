<?php

namespace App\Http\Controllers;

use App\AllocateClassroom;
use App\Course;
use App\Departments;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class AllocateClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {

        $department = Departments::all();
        $course = Course::all();
        return view ('Admin.AllocateClassrooms.index',['department'=>$department,'course'=>$course]);
        /*$department = null;
        if($request->department) $department = $request->department;
        $allRoom =AllocateClassroom::with(['course','department' => function($query) use($department){
            if($department) $query->where('id', $department);
        }])->paginate(10);
       //dd($allRoom);

        return view('Admin.allocateClassrooms.index',['allRoom'=>$allRoom]);*/

    }

    public function ajaxRoom($id)
    {
        $allRoom = AllocateClassroom::where('department_id',$id)->with('course')->get();

        //dd($allRoom);
       /* $course = Course::where('name','code',$id)->get();*/
        return response()->json($allRoom);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department_id = Departments::all();
        $course_id = Course::all();
      //  dd($course_id);
        return view('Admin.allocateClassrooms.create')
            ->with('department_id',$department_id)
            ->with('course_id',$course_id);


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
            'department_id' => 'required',
            'course_id'=>'required',
            'Room_No'=>'required',
            'date'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
        ]);
        $obj = new AllocateClassroom();
        $obj->department_id = $request->department_id;
        $obj->course_id = $request->course_id;
        $obj->Room_No = $request->Room_No;
        $obj->date = $request->date;
        $obj->start_time = $request->start_time;
        $obj->end_time = $request->end_time;
        $obj->save();
        Session::flash('message','Room Allocate Successfully......!!!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

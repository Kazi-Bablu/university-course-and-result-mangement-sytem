<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Departments;
use Session;

class DepartmentController extends Controller
{
    public function create()
    {
        return view('Admin.Department.Create');
    }

    public function store(Request  $request)
    {
        $this->validate($request,[
            'code'=>'required|min:3|max:5',
            'name'=>'required| min:6|max:40',
        ]);
        $obj = new Departments();
        $obj->code = $request->code;
        $obj->name = $request->name;
        $obj->save();
        Session::flash('message','Department Successfully Add......!');
        return redirect()->back();
    }

   /* view department*/

   public function index()
   {

        $allDepartment = Departments::paginate(10);
        return view('Admin.Department.index',['allDepartment' => $allDepartment]);

   }
   /*update Department*/
   public function  edit($id)
   {
       $data = Departments::find($id);
     //  dd($data);
      return view('Admin.Department.Edit')
       ->with('data',$data);
   }
   /*Department update*/
   public function update(Request $request, $id)
   {
       $this->validate($request,[
                'code' => 'required|min:3',
                'name' =>'required',
       ]);
       $exitData= Departments::find($id);
       $exitData->code=$request->code;
       $exitData->name=$request->name;
       $exitData->save();
       session::flash('message','Department update Successfully');
       return redirect('Admin/Department/index');
   }
 /*  Department Delete*/
    public function delete($id)
    {
        //dd($id);
        $data = Departments::find($id);
        $data->delete();
        session::flash('message','Department Successfully Delete....!!!');
        return back();

    }

}

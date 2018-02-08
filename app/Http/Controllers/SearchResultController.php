<?php

namespace App\Http\Controllers;
use App\SaveStudentResult;
use Illuminate\Http\Request;
use PDF;
class SearchResultController extends Controller
{

    public function create()
    {
        return view('Admin.SearchResult.create');
    }
    public function search(Request $request)
    {
      if($request->ajax())
      {
          $output="";
          $results = SaveStudentResult::with('course')->where('st_name','LIKE','%'.$request->reg_id.'%')->take(3)->get();

          if($results)
          {
              foreach ($results as $key => $result)
              {
                  $output.='<tr>'.
                                    '<td>'.$result->id.'</td>'.
                                    '<td>'.$result->reg_number.'</td>'.
                                    '<td>'.$result->st_name.'</td>'.
                                    '<td>'.$result->department_na.'</td>'.
                                    '<td>'.$result->course->name.'</td>'.
                                    '<td>'.$result->grade.'</td>'.

                                 '</tr>';
              }
              return Response($output);
          }else {
                  return Response()->json(['no'=>'NOT FOUND....!!!']);
              }
      }
    }

    public function downloadPDF(){
        $result = SaveStudentResult::all();
        $pdf = PDF::loadView('pdf', compact('result'));
        return $pdf->download('invoice.pdf');
    }
}

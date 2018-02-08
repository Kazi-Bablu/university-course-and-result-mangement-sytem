@extends('Admin.Master');
@section('title')
    View All Student Result List
@endsection
@section('message')
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
@endsection
@section('content')
    <div>
        <div class="panel panel-default">
            {{--<div class="panel-heading">
                Total Student{{ $saveResult->total() }}
            </div>--}}
            <div class="panel-body">
                {!! Form::open(['url' => '/Admin/saveResult/index','method'=>'GET']) !!}
                <div class="col-md-10">
                    <div class="col-md-5">
                        <div class="form-group">
                            {!! Form::text('st_name', null, array('placeholder' => 'Enter Student Name','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div >
                        {{Form::submit('Search',['class'=>'btn btn-primary'])}}
                    </div>
                </div>
                {!! Form::close() !!}
                <div class="col-md-12">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="success">
                                <th> ID</th>
                                <th>Student Reg. Number</th>
                                <th>Student Name</th>
                                <th>Student Email</th>
                                <th>Department</th>
                                <th>Course Name</th>
                                <th>Grade</th>
                                <th>Action</th>
                            </tr>

                            @foreach($saveResult as $value)


                                <tr class="info">
                                    <td class="success">{{$value->id}}</td>
                                    <td class="success">{{$value->	reg_number}}</td>
                                    <td class="success">{{$value->	st_name}}</td>
                                    <td class="success">{{$value->	email_ad}}</td>
                                    <td class="success">{{$value->department_na}}</td>
                                    <td class="success">{{$value->course->name}}</td>
                                    <td class="success">{{$value->grade}}</td>

                                    <td class="success">
                                        {{--<div class="btn btn-success">
                                            <a href="{{ url('/Admin/saveResult',[$value->id,'edit']) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        </div>--}}

                                        <div class="btn btn-danger">
                                            <a class="delete_link" href="{{ url('/Admin/saveResult',[$value->id,'delete']) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div>

                                        {{--  {!! Form::open(['url' => 'foo/bar']) !!}
                                                  <div>
                                                      {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger '] )  }}
                                                  </div>
                                          {!! Form::close() !!}--}}

                                    </td>

                                </tr>

                            @endforeach

                        </table>
                    </div>
                    {{--{{ $saveResult->links() }}--}}
                </div>
            </div>

        </div>
    </div>

@endsection
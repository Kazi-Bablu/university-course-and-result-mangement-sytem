@extends('Admin.Master');
@section('title')
    View All Course List
@endsection
@section('message')
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
@endsection
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">  {{ $allCourse->total() }} Total Course</div>
        <div class="panel-body">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr class="success">
                        <th> ID</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Course Credit</th>
                        <th>Course Description</th>
                        <th> Department</th>
                        <th>Course Semester</th>


                        <th>Action</th>
                    </tr>

                    @foreach($allCourse as $course)


                        <tr class="info">
                            <td class="success">{{$course->id}}</td>
                            <td class="success">{{$course->code}}</td>
                            <td class="success">{{$course->name}}</td>
                            <td class="success">{{$course->credit}}</td>
                            <td class="success">{{$course->description}}</td>
                            <td class="success">{{$course->department->name}}</td>
                            <td class="success">{{$course->semester}}</td>
                            <td class="success">
                                <div class="btn btn-success">
                                    <a href="{{ url('/Admin/course',[$course->id,'edit']) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </div>

                                <div class="btn btn-danger">
                                    <a class="delete_link" href="{{ url('/Admin/course',[$course->id,'delete']) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                {{ $allCourse->links() }}
            </div>
        </div>

    </div>

@endsection
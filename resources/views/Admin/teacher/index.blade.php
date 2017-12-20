@extends('Admin.Master');
@section('title')
    View All Teacher List
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
        <div class="panel-heading">  {{ $allTeacher->total() }} Total Teacher</div>
        <div class="panel-body">
                <div class="table-responsive" >
                    <div class="col-md-12 ">
                        <table class="table table-bordered">
                            <tr class="success">
                                <th> ID</th>
                                <th> Name</th>
                                <th> Address</th>
                                <th> Email</th>
                                <th> Contact Number</th>
                                <th>  Designation</th>
                                <th> Department</th>
                                <th> Credit</th>
                                <th>Action</th>
                            </tr>

                            @foreach($allTeacher as $teacher)

                                <tr class="info">
                                    <td class="success">{{$teacher->id}}</td>
                                    <td class="success">{{$teacher->name}}</td>
                                    <td class="success">{{$teacher->address}}</td>
                                    <td class="success">{{$teacher->email}}</td>
                                    <td class="success">{{$teacher->phone}}</td>
                                    <td class="success">{{$teacher->designation }}</td>
                                    <td class="success">{{$teacher->department}}</td>
                                    <td class="success">{{$teacher->credit}}</td>
                                    <td class="success">
                                        <div class="btn btn-success">
                                            <a href="{{ url('/Admin/teacher',[$teacher->id,'edit']) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        </div>

                                        <div class="btn btn-danger">
                                            <a class="delete_link" href="{{ url('/Admin/teacher',[$teacher->id,'delete']) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                        {{ $allTeacher->links() }}
                    </div>
                </div>
        </div>

    </div>

@endsection
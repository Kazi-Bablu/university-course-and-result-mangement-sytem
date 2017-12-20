@extends('Admin.Master');
@section('title')
    View All Department List
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
        <div class="panel-heading">  {{ $allDepartment->total() }} Total Department</div>
        <div class="panel-body">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr class="success">
                        <th> ID</th>
                        <th>Department Code</th>
                        <th>Department Name</th>
                        <th>Action</th>
                    </tr>
                        @foreach($allDepartment as $department)
                            <tr class="info">
                                        <td class="success">{{$department->id}}</td>
                                         <td class="success">{{$department->code}}</td>
                                        <td class="success">{{$department->name}}</td>
                                    <td class="success">
                                        <div class="btn btn-success">
                                            <a href="{{ url('/Admin/Department',[$department->id,'edit']) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        </div>

                                        <div class="btn btn-danger">
                                            <a class="delete_link" href="{{ url('/Admin/Department',[$department->id,'delete']) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                {{ $allDepartment->links() }}
            </div>
        </div>

    </div>

@endsection
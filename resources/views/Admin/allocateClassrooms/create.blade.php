@extends('Admin.Master')
{{--Page title content--}}

@section('title')
    Allocate Classrooms
@endsection

{{--Show Session Message Content--}}

@section('message')

    @if(Session::has('message'))
        <div  class="alert alert-success" role="alert">
            {{session::get('message')}}
        </div>
    @endif

@endsection

{{--Error Content--}}
@section('errors')

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
{{--Main content--}}
@section('content')

    {!! Form::open(array('url' => '/admin/allocateClassrooms/store')) !!}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">



                <div class="col-md-7">
                    <div class="form-group">
                        {{Form::label('Department','Department ')}}
                        {{csrf_field()}}
                        <select name="department_id" class="form-control">
                            <option value=" ">----Select Department-----</option>
                            @foreach($department_id as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        {{Form::label('Course','Course')}}
                        {{csrf_field()}}
                        <select name="course_id" class="form-control">
                            <option value=" ">----Select Course-----</option>
                            @foreach($course_id as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        {{Form::label('Room No','Room No')}}
                        {{csrf_field()}}
                        <select name="Room_No" class="form-control">
                            <option>----Select Room No-----</option>
                            <option>Room 301</option>
                            <option>Room 302</option>
                            <option>Room 303</option>
                            <option>Room 304</option>
                            <option>Room 401</option>
                            <option>Room 402</option>
                            <option>Room 403</option>
                            <option>Room 501</option>
                            <option>Room 502</option>
                            <option>Room 503</option>
                            <option>Room 504</option>
                        </select>
                    </div>

                    <div class="form-group">
                        {{Form::label('Date','Day')}}
                        {!! Form::date('date', \Carbon\Carbon::now(),array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {{ Form::label('From Time', 'From Time:') }}
                        {{ Form::text('start_time', null, array('class' => 'form-control','placeholder'=>'please enter this formet:11:00')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('To Time', 'To Time:') }}
                        {{ Form::text('end_time', null, array('class' => 'form-control','placeholder'=>'please enter this formet:11:00')) }}
                    </div>
                    <div >
                        {{Form::submit('Allocate',['class'=>'btn btn-primary'])}}
                    </div>
                </div>



            </div>
        </div>
    </div>

    {!! Form::close() !!}


@endsection
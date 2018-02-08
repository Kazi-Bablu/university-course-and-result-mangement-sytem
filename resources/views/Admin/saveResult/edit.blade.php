{{--
@extends('Admin.Master')
--}}
{{--Page title content--}}{{--


@section('title')
    Update Student Result
@endsection

--}}
{{--Show Session Message Content--}}{{--


@section('message')

    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{session::get('message')}}
        </div>
    @endif

@endsection

--}}
{{--Error Content--}}{{--

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
--}}
{{--Main content--}}{{--

@section('content')

    {!! Form::model($data,array('url' => '/admin/saveResult/'.$data->id.'/update')) !!}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">

                <div class="col-md-7">

                    <div class="form-group">
                        {{Form::label('Student Registration','Student Registration Number')}}
                        {!! Form::text('reg_number', null, array('id'=>'reg_number','placeholder' => ' Registration Number','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('Name','Student Name')}}
                        {!! Form::text('st_name', null, array('id'=>'st_name','placeholder' => 'Enter Student Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('Email','Student Email')}}
                        {!! Form::email('email_ad', null, array('id'=>'email_ad','placeholder' => 'Enter Student Email','class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {{Form::label('Department','Department ')}}
                        {!! Form::text('department_na', null, array('id'=>'department_na','placeholder' => 'Enter Student Department','class' => 'form-control','onchange'=>"teacherQuery() ")) !!}

                    </div>

                   --}}
{{-- <div class="form-group">
                        {{Form::label('Select Course','Select Course ')}}
                        <select name="course_id" class="form-control" id="course_id">
                            <option value=" ">----Select Course-----</option>
                            <option value="course_id"> </option>

                        </select>
                    </div>--}}{{--

                    <div class="form-group">
                        {{Form::label('Course','Course ')}}
                        {!! Form::text('course[name]', null, array('id'=>'course_id','placeholder' => 'Enter Student Course','class' => 'form-control','onchange'=>"teacherQuery() ")) !!}

                    </div>


                    <div class="form-group">
                        {{Form::label('Select Grade','Select Grade ')}}
                        {{ Form::select('grade', ['A+' => 'A+', 'A' => 'A', 'A-' => 'A-', 'B+' => 'B+', 'B' => 'B', 'B-' => 'A', 'C+' => 'C+', 'C' => 'C', 'C-' => 'C-', 'D+' => 'D+', 'D' => 'D', 'D-' => 'D-'] , null, array('id'=>'grade','placeholder' => 'Enter Student Grade','class' => 'form-control'))}}
                    </div>

                    <div>
                        {{Form::submit('Enroll',['class'=>'btn btn-primary'])}}
                    </div>
                </div>


            </div>
        </div>
    </div>

    {!! Form::close() !!}


@endsection--}}

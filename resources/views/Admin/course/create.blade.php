@extends('Admin.Master')
{{--Page title content--}}

@section('title')
    Add Course List
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

    {!! Form::open(array('url' => 'Admin/course/store')) !!}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">


                <div class="col-md-7">
                    <div class="form-group">
                        {{Form::label('Code','Course Code')}}
                        {!! Form::text('code', null, array('placeholder' => 'Course Code','class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {{Form::label('name','Course Name')}}
                        {!! Form::text('name', null, array('placeholder' => 'Course Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('credit','Course Credit')}}
                        {!! Form::text('credit', null, array('placeholder' => 'Course Credit 0.5 to 5.0','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('credit','Course Description')}}
                        {{ Form::textarea('description',null,array('placeholder'=>'Enter Course Description','class'=>'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{Form::label('department','Department')}}
                        {{--{{Form::select('department', $department, ' ', array('placeholder' => 'Select Department','class'=>'form-control'))}}--}}
                        <select name="department" class="form-control">
                            <option value=" ">----Select Department-----</option>
                            @foreach($department as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        {{Form::label('semester','Select Semester')}}
                                {{Form::select('semester', ['First Semester' => 'First Semester',
                                                                            'Second Semester' => 'Second Semester',
                                                                            'Three Semester' => 'Three Semester',
                                                                            'Four Semester' => 'Four Semester',
                                                                            'Five Semester' => 'Five Semester',
                                                                            'Six Semester' => 'Six Semester',
                                                                            'Seven Semester' => 'Seven Semester',
                                                                            'Eight Semester' => 'Eight Semester',
                                                                            'Nine Semester' => 'Nine Semester',
                                                                            'Ten Semester' => 'Ten Semester',
                                                                            'Eleven Semester' => 'Eleven Semester',
                                                                            'Twelve Semester' => 'Twelve Semester',


                                ], null, ['placeholder' => 'Select Semester','class'=>'form-control'])}}

                    </div>



                    <div >
                        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
                    </div>
                </div>



            </div>
        </div>
    </div>

    {!! Form::close() !!}


@endsection
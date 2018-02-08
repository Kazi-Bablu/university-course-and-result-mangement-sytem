@extends('Admin.Master')
{{--Page title content--}}

@section('title')
    Add Student List
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

    {!! Form::model($data,array('url' => '/admin/students/'.$data->id.'/update')) !!}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">


                <div class="col-md-7">

                    <div class="form-group">
                        {{Form::label('reg_id','Student Registration Number')}}
                        {!! Form::number('reg_id', null, array('placeholder' => 'Enter Student Registration Number','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('Name','Student Name')}}
                        {!! Form::text('s_name', null, array('placeholder' => 'Enter Student Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('Email','Student Email')}}
                        {!! Form::email('email', null, array('placeholder' => 'Enter Student Email','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('phone','Student Phone Number')}}
                        {!! Form::number('number', null, array('placeholder' => 'Enter Student Name','class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {{Form::label('phone','Student  Date Of Birth Select')}}
                        {!! Form::date('date', \Carbon\Carbon::now(),array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {{Form::label('Address','Student Address ')}}
                        {{ Form::textarea('address',null,array('placeholder'=>'Enter Course Description','class'=>'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{Form::label('Department','Department ')}}
                        {{csrf_field()}}
                        <select name="department" class="form-control">
                            <option value=" ">----Select Department-----</option>
                            @foreach($department as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div >
                        {{Form::submit('update',['class'=>'btn btn-primary'])}}
                    </div>
                </div>



            </div>
        </div>
    </div>

    {!! Form::close() !!}


@endsection
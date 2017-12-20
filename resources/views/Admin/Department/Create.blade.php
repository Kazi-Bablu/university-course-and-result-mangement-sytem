@extends('Admin.Master')
@section('title')
    Add Department
@endsection
@section('message')

    @if(Session::has('message'))
        <div  class="alert alert-success" role="alert">
            {{session::get('message')}}
        </div>
    @endif

@endsection
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
@section('content')

    {!! Form::open(array('url' => 'Admin/Department/store')) !!}
        <div class="col-md-12">
            <div class="panel panel-default">
                    <div class="panel-heading"></div>
                        <div class="panel-body">


                            <div class="col-md-6">
                                <div class="form-group">
                                    {{Form::label('Code','Department Code')}}
                                    {{Form::text('code','',['class'=>'form-control','placeholder'=>'Enter Department Code'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('name','Department Name')}}
                                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Department'])}}
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
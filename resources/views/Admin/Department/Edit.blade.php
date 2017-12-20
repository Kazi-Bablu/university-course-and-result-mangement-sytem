@extends('Admin.Master')
@section('title')
    Update Department
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

    {!! Form::model($data, ['url'=> 'Admin/Department/ ' . $data->id . '/update']) !!}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">


                <div class="col-md-6">
                    <div class="form-group">
                        {{Form::label('Code','Department Code')}}
                        {!! Form::text('code', null, array('placeholder' => 'Code','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{Form::label('name','Department Name')}}
                        {!! Form::text('name', null, array('placeholder' => 'name','class' => 'form-control')) !!}

                    </div>
                </div>
                <div >
                    {{Form::submit('update',['class'=>'btn btn-primary'])}}
                </div>

            </div>
        </div>
    </div>

    {!! Form::close() !!}


@endsection
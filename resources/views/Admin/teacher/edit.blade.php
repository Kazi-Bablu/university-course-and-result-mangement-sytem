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

    {!! Form::model($data,array('url' => '/Admin/teacher/'.$data->id.'/update')) !!}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">


                <div class="col-md-7">
                    <div class="form-group">
                        {{Form::label('Name','Teacher Name')}}
                        {!! Form::text('name', null, array('placeholder' => 'Enter Teacher Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('Address','Teacher Address ')}}
                        {{ Form::textarea('address',null,array('placeholder'=>'Enter Course Description','class'=>'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{Form::label('email','Teacher Email Address')}}
                        {!! Form::email('email', null, array('placeholder' => 'Enter Teacher Mail Address','class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {{Form::label('phone','Teacher Phone Number')}}
                        {!! Form::text('phone', null, array('placeholder' => 'Enter Teacher Phone number ','class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {{Form::label('Designation','Select Teacher Designation')}}
                        {{Form::select('designation', ['lecturer' => 'lecturer',
                                                                    'Senior lecturer' => 'Senior lecturer',
                                                                    'Assistant Professor' => 'Assistant Professor',
                                                                    'Associate professor' => 'Associate professor',
                                                                    'Professor' => 'Professor',
                        ], null, ['placeholder' => 'Select Semester','class'=>'form-control'])}}

                    </div>

                    <div class="form-group">
                        {{Form::label('department','Department')}}
                        {{Form::select('department', $department, ' ', array('placeholder' => 'Select Department','class'=>'form-control'))}}

                    </div>

                    <div class="form-group">
                        {{Form::label('credit','Teacher Credit To Be Taken')}}
                        {!! Form::number('credit', null, array('placeholder' => 'Enter Teacher Credit  Number','class' => 'form-control')) !!}
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
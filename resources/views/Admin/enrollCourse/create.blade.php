@extends('Admin.Master')
{{--Page title content--}}

@section('title')
    Add Student List
@endsection

{{--Show Session Message Content--}}

@section('message')

    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
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

    {!! Form::open(array('url' => '/admin/enrollCourse/store')) !!}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">

                {!! Form::open(array('url' => '/admin/enrollcourse/create')) !!}
                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('reg_id','Search Student Register Number')}}
                                {!! Form::text('reg_id', null, array('id'=>'reg_id','placeholder' => 'Search Registration Number','class' => 'form-control')) !!}
                            </div>
                        </div>
                 {!! Form::close()  !!}
                <div class="col-md-7">

                    <div class="form-group">
                        {{Form::label('reg_id','Student Registration Number')}}
                        {!! Form::text('reg_num', null, array('id'=>'reg_num','placeholder' => ' Registration Number','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('Name','Student Name')}}
                        {!! Form::text('s_name', null, array('id'=>'s_name','placeholder' => 'Enter Student Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('Email','Student Email')}}
                        {!! Form::email('email', null, array('id'=>'email','placeholder' => 'Enter Student Email','class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {{Form::label('Department','Department ')}}
                        {!! Form::text('department_id', null, array('id'=>'department_id','placeholder' => 'Enter Student Department','class' => 'form-control','onchange'=>"teacherQuery() ")) !!}
                        {{--<select name="Department" class="form-control" id="department_id">
                            <option value="">----Select Department----</option>
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        </select>--}}
                    </div>

                    <div class="form-group">
                        {{Form::label('Select Course','Select Course ')}}
                        {{csrf_field()}}
                        <select name="course_id" class="form-control" id="course_id">
                            <option value=" ">----Select Course-----</option>
                            {{--@foreach($course as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach--}}
                        </select>
                    </div>


                    <div class="form-group">
                        {{Form::label('Date','Student Course Date Select')}}
                        {!! Form::date('date', \Carbon\Carbon::now(),array('class' => 'form-control')) !!}
                    </div>

                    <div>
                        {{Form::submit('Enroll',['class'=>'btn btn-primary'])}}
                    </div>
                </div>


            </div>
        </div>
    </div>

    {!! Form::close() !!}


@endsection
@section('script')
    <script type="text/javascript">
        var dropdown = "<option value=''>----Select Course-----</option>";
        $('#reg_id').autocomplete({
            source: '{!!URL::route('autocomplete')!!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                $('#reg_num').val(ui.item.reg_id);
                $('#s_name').val(ui.item.s_name);
                $('#email').val(ui.item.email);
                $('#department_id').val(ui.item.department_name);
                for(var i=0;i<ui.item.course_id.length;i++){
                    dropdown +="<option value='"+ui.item.course_id[i].id+"'>"+ui.item.course_id[i].name+"</option>"
                }
                $('#course_id').html(dropdown);
                console.log(ui.item.course_id);
            }
        });



    </script>
@endsection
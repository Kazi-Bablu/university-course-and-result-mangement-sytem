@extends('Admin.Master')
{{--Page title content--}}

@section('title')
    Add Student Result
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

    {!! Form::open(array('url' => '/admin/saveResult/store')) !!}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">

                {{--{!! Form::open(array('url' => '/admin/saveResult/create')) !!}--}}
                <div class="col-md-12">
                    <div class="form-group">
                        {{Form::label('Student Register','Search Student Register Number')}}
                        {!! Form::text('reg_id', null, array('id'=>'reg_id','placeholder' => 'Search Registration Number','class' => 'form-control')) !!}
                    </div>
                </div>
              {{--  {!! Form::close()  !!}--}}
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

                    <div class="form-group">
                        {{Form::label('Select Course','Select Course ')}}
                        <select name="course_id" class="form-control" id="course_id">
                            <option value=" ">----Select Course-----</option>

                        </select>
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


@endsection
@section('script')
    <script type="text/javascript">
        var dropdown = "<option value=''>----Select Course-----</option>";
        $('#reg_id').autocomplete({
            source: '{!!URL::route('autocomplete/result')!!}',
            //minlenght: 10,
            autoFocus: true,
            select: function (e, ui) {
                $('#reg_number').val(ui.item[0].reg_num);
                $('#st_name').val(ui.item[0].s_name);
                $('#email_ad').val(ui.item[0].email);
                $('#department_na').val(ui.item[0].department_id);
                var count = Object.keys(ui.item).length;
                //console.log(count);
               // alert(ui.item[0].course_id.id);
                for(var i=0;i < count;i++){
                    dropdown +="<option value='"+ui.item[i].course_id.id+"'>"+ui.item[i].course_id.name+"</option>"
                }
                 $('#course_id').html(dropdown);
                console.log(ui);
            }
        });



    </script>
@endsection
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

    {!! Form::open(array('url' => 'Admin/courseAssignTo/store')) !!}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">


                <div class="col-md-7">

                    <div class="form-group">
                        {{Form::label('Department','Department')}}
                        {{--{{Form::label('department','Department')}}
                        {{Form::select('department', ['s'=>'S'], ' ', array('placeholder' => 'Select Department','class'=>'form-control'))}}--}}
                        <select name="department_id"  id="department"  onchange="teacherQuery()" class="form-control">
                               <option value="">-- Select Department--</option>
                               @foreach($department as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                       {{-- {{Form::label('teacher','Teacher')}}
                        {{Form::select('teacher', ['s'=>'S'], ' ', array('placeholder' => 'Select Teacher','class'=>'form-control'))}}--}}
                        {{Form::label('Teacher','Teacher Select')}}
                        <select name="teacher" id="teacher"  class="form-control">
                            <option value=" "> -- Select Teacher---</option>

                        </select>


                    </div>

                    <div class="form-group">
                        {{Form::label('credit',' Credit To Be Taken')}}
                        {!! Form::number('credit_taken', null, array('id'=>'credit_taken','placeholder' => 'Enter  Credit  To Be Taken','class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                       {{-- {{Form::label('course','Course Code')}}
                        {{Form::select('course', ['s'=>'S'], ' ', array('placeholder' => 'Select Course Code','class'=>'form-control'))}}--}}
                        {{Form::label('Course',' Course ')}}
                        <select name="course" id="course_code" class="form-control">
                            <option value=" "> -- Select Course---</option>
                            @foreach($course as $value)
                                <option value="{{ $value->id }}">{{ $value->code }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        {{Form::label('name',' Name')}}
                        {!! Form::text('C_name', null, array('id'=>'course','placeholder' => 'Enter  Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('credit',' Credit ')}}
                        {!! Form::text('course_credit', null, array('id'=>'course_credit','placeholder' => 'Enter  Credit  ','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('credit',' Remain Credit ')}}
                        {!! Form::text('remain_credit', null, array('id'=>'remain_credit','placeholder' => ' Remain Credit  ','class' => 'form-control')) !!}
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
@section('script')
    <script>
        function teacherQuery(){
            var department = $('#department' ).val();

            if(department!=" ")
            {
                var urls = "{{ URL::to('/teacher/course/dropdown') }}";
                var request = $.ajax({
                    url: urls+"/"+department,
                    type: "GET",
                    dataType: 'json'
                });
                request.done(function(data){
                    var teacher ="<option>-- Select Teacher --</option>";
                    for (var  i=0; i<data.length;i++)
                    {
                        teacher +="<option value=' " +data[i].id+ " ' >"+data[i].name+ "</option>";
                    }
                    $("#teacher").html(teacher);
                });
                request.fail(function(){
                    alert('failed to get items for that department');
                });
            }else {
                alert('Select Department');
            }

        }
        $('#teacher').change(function () {
            var teacher_name = $('#teacher').val();
            if(teacher_name!='') {
            var teacher = " ";
            var url = "{{URL::to('/teacher/credit/') }}";
            var requests = $.ajax({
            url: url + "/" + teacher_name,
            type: "GET",
            dataType: 'json'
            });
            requests.done(function (data) {
            $("#credit_taken").val(data[0].credit);
            });
            requests.fail(function () {
            alert('Failed to get credit for that Teacher');
            });
            }
            else {
            alert('Select Teacher');
            }
        });

        $('#course_code').change(function () {
            var course_code = $('#course_code').val();
            if(course_code!='') {
                var course = " ";
                var url = "{{URL::to('/course/credit/') }}";
                var requests = $.ajax({
                    url: url + "/" + course_code,
                    type: "GET",
                    dataType: 'json'
                });
                requests.done(function (data) {
                    $("#course").val(data[0].name);
                    $("#course_credit").val(data[0].credit);

                    var hour_start = parseInt( document.getElementById('credit_taken').value );
                    document.getElementById('remain_credit').value = hour_start - data[0].credit;


                });
                requests.fail(function () {
                    alert('Failed to get name form Course');
                });
            }
            else {
                alert('Select Course Code');
            }
        });



    </script>

@endsection
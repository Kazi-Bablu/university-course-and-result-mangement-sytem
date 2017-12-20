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
                        {{--{{Form::label('department','Department')}}
                        {{Form::select('department', ['s'=>'S'], ' ', array('placeholder' => 'Select Department','class'=>'form-control'))}}--}}
                        <select name="department"  id="department"  onchange="teacherQuery()" class="form-control">
                               <option value="">-- Select --</option>
                               @foreach($department as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                       {{-- {{Form::label('teacher','Teacher')}}
                        {{Form::select('teacher', ['s'=>'S'], ' ', array('placeholder' => 'Select Teacher','class'=>'form-control'))}}--}}

                        <select name="teacher" id="teacher"  class="form-control">

                            <option value=" "> -- Select Teacher---</option>

                        </select>


                    </div>

                    <div class="form-group">
                        {{Form::label('credit',' Credit To Be Taken')}}
                        {!! Form::number('credit_taken', null, array('placeholder' => 'Enter  Credit  To Be Taken','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('credit',' Remain Credit ')}}
                        {!! Form::number('remain_credit', null, array('placeholder' => ' Remain Credit  ','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                       {{-- {{Form::label('course','Course Code')}}
                        {{Form::select('course', ['s'=>'S'], ' ', array('placeholder' => 'Select Course Code','class'=>'form-control'))}}--}}

                        <select name="course"  class="form-control">



                        </select>

                    </div>
                    <div class="form-group">
                        {{Form::label('name',' Name')}}
                        {!! Form::text('name', null, array('placeholder' => 'Enter  Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {{Form::label('credit',' Credit ')}}
                        {!! Form::number('credit', null, array('placeholder' => 'Enter  Credit  ','class' => 'form-control')) !!}
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
                var url = "{{ URL::to('/teacher/course/dropdown') }}";
                var request = $.ajax({
                    url: url+"/"+department,
                    type: "GET",
                    dataType: 'json'
                });
                request.done(function(data){
                    for (var  i=0; i<data.length;i++)
                    {
                        $("#teacher").html("<option value=' " +data[i].id+ " ' >"+data[i].name+ "</option>");
                    }
                });
                request.fail(function(){
                    alert('failed to get items for that department');
                });
            }else {
                alert('Select Department');
            }

        }
    </script>

@endsection
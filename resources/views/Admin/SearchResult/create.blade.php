@extends('Admin.Master')
{{--Page title content--}}

@section('title')
    Search Student Result
@endsection

{{--Show Session Message Content--}}

@section('message')


@endsection

{{--Error Content--}}
@section('errors')


@endsection
{{--Main content--}}
@section('content')

    {!! Form::open(array('url' => '/downloadPDF/')) !!}
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">

                        <div class="col-md-12">
                            <div class="form-group">
                                {{Form::label('Student Register','Search Student Register Number')}}
                                {!! Form::text('reg_id', null, array('id'=>'reg_id','placeholder' => 'Search Registration Number','class' => 'form-control')) !!}
                            </div>

                           {{-- <div>
                                {{Form::submit('PDF',['class'=>'btn btn-primary'])}}
                            </div>--}}
                            <br>
                    <div>

                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Register Number</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>course Name</th>
                                    <th>Grade</th>


                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}


@endsection
@section('script')
  <script type="text/javascript">
      $('#reg_id').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type : 'get',
                url    : '{{URL::to('index')}}',
                data :  {'index':$value},
                success:function(data)
                {
                    $('tbody').html(data);
                }
            });
      })
  </script>
@endsection
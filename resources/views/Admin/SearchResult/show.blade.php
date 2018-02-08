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
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>course code</th>
                        <th>Name</th>
                        <th>Grade</th>
                    </tr>
                    </thead>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection
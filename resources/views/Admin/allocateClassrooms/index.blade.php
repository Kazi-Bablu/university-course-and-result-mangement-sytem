@extends('Admin.Master');
@section('title')
    View All Allocate Classroom List
@endsection
@section('message')
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
@endsection
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">  {{--{{ $allRoom->total() }}--}} Total </div>
        <div class="panel-body">
            <div class="col-md-12">
                <form method="get" id="department-form">
                    <select name="department" id="department" onchange="departmentQuery()" class="form-control">
                        <option value=" ">----Select Department-----</option>
                        @foreach($department as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </form>


                             <br>
                                <div class="table-responsive" >
                                  <table class="table table-bordered">
                                          <tr class="success">
                                              <th>ID</th>
                                              <th>Course Code</th>
                                              <th>Course Name</th>
                                              <th>Schedule Info</th>
                                          </tr>

                                      <tbody id="allRoom">

                                           {{--   <tr class="info" id="department">
                                                  <td class="success" >{{$room->id}}</td>
                                                  <td class="success" >{{$room->course->code}}</td>
                                                  <td class="success" >{{$room->course->name}}</td>
                                                  <td class="success" >{{$room->Room_No}}
                                                      {{$room->	date}}
                                                      {{$room->	start_time}}
                                                      {{$room->	end_time}}


                                                  </td>
                                              </tr>--}}

                                      </tbody>


                                  </table>
                                </div>



            </div>
        </div>
    </div>

@endsection
@section('script')
<script>
  function departmentQuery()
  {
      var department = $('#department' ).val();

      if(department!=" ")
      {
          var urls = "{{ URL::to('roomAjax') }}";
          var urls = urls+"/"+department;

          var request = $.ajax({
              url: urls,
              type: "GET",
              dataType: 'json'
          });
          request.done(function(data){
              //alert(data.toSource())
              var allRoom ="<tr>";
              for (var  i=0; i<data.length;i++)
              {
                 // room +="<option value=' " +data[i].id+ " ' >"+data[i].name+ "</option>";
              allRoom +=" <tr> " +
                            "<td>"+data[i].id+"</td>"+
                            "<td>"+data[i].course['code']+"</td>"+
                            "<td>"+data[i].course['name']+"</td>"+
                            "<td>"+data[i].Room_No+"--"
                            +data[i].date+"--"+data[i].start_time+"--"+data[i].end_time+"</td>"+

                          "</tr>";

              }
              $("#allRoom").html(allRoom);
              console.log(allRoom);
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
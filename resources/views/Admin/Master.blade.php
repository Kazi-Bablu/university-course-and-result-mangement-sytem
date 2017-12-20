<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
@include('Admin.Include.Header')

</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Binary admin</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="{{ route('logout') }}"
                                                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-danger square-btn-adjust">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </nav>
    <!-- /. NAV TOP  -->
    @include('Admin.Include.Navbar')

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2> @yield('title')</h2>
                </div>
            </div>
            <!-- /. ROW  -->

            <!-- /. ROW  -->
            <div class="row" >
                <div class="col-md-12 col-sm-12 col-xs-12">
                 {{--   <div class="panel panel-default">--}}
                            <div class="panel-heading">
                                @yield('message')
                            </div>
                         {{--   <div class="col-md-12">--}}
                                    @yield('errors')
                                  @yield('content')
                           {{-- </div>--}}
                    </div>

                {{-- </div>--}}
            </div>
            <!-- /. ROW  -->

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>

@include('Admin.Include.Footer')
@yield('script')
@include('Admin.Include.customjs')
</body>
</html>

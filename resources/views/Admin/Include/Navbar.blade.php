<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{asset('admin/img/find_user.png')}}" class="user-image img-responsive"/>
            </li>


            <li>
                <a class="active-menu"  href="/blank"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>

        {{--    <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>
--}}
            {{--Department Navigation--}}
            <li>
                <a href="#"><i class="fa fa-desktop" ></i> Department<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/Admin/Department/Create">Add Department</a>
                    </li>
                    <li>
                        <a href="/Admin/Department/index">View Department List</a>
                    </li>

                </ul>
            </li>

            {{--Course navigation--}}

            <li>
                <a href="#"><i class="fa fa-book" ></i> Course<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/course/create">Add Course List</a>
                    </li>
                    <li>
                        <a href="/Admin/course/index">View Course List</a>
                    </li>

                </ul>
            </li>

            {{--teacher Navigation--}}

            <li>
                <a href="#"><i class="fa fa-user" ></i> Teacher<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/teacher/create">Add Teacher List</a>
                    </li>
                    <li>
                        <a href="/Admin/teacher/index">View Teacher List</a>
                    </li>

                </ul>
            </li>

            {{--Course Assign to --}}
            <li>
                <a href="#"><i class="fa fa-cogs" ></i> Course Assign To Teacher<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/courseAssignTo/create">Add CourseAssign  List</a>
                    </li>
                    <li>
                        <a href="/Admin/courseAssignTo/index">View CourseAssign List</a>
                    </li>

                </ul>
            </li>

        </ul>

    </div>

</nav>
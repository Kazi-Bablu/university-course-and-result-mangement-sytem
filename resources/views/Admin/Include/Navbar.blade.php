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

            {{--Student nav bar --}}
            <li>
                <a href="#"><i class="fa fa-users" ></i>Student<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/students/create">Add Student</a>
                    </li>
                    <li>
                        <a href="/Admin/students/index">View Student List</a>
                    </li>

                </ul>
            </li>
            {{--Allocate classroom--}}
            <li>
                <a href="#"><i class="fa fa-archive" ></i>Allocate Classroom<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/allocateClassrooms/create">Add Classrooms</a>
                    </li>
                    <li>
                        <a href="/Admin/allocateClassrooms/index">View Classrooms</a>
                    </li>

                </ul>
            </li>

            {{--enroll course--}}

            <li>
                <a href="#"><i class="fa fa-user" ></i>Enroll In a Course<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/enrollCourse/create">Add Enroll Course</a>
                    </li>
                    <li>
                        <a href="/Admin/enrollCourse/index">View View Enroll Course</a>
                    </li>

                </ul>
            </li>
            {{--Save Student Result--}}
            <li>
                <a href="#"><i class="fa fa-bars" ></i>Save Student Result<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/saveResult/create">Add Student Result</a>
                    </li>
                    <li>
                        <a href="/Admin/saveResult/index">View Student Result</a>
                    </li>

                </ul>
            </li>

            {{--student result section--}}
            <li>
                <a href="#"><i class="fa fa-eye" ></i>Search Student Result<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/Result/search">Search Student Result</a>
                    </li>

                </ul>
            </li>

        </ul>

    </div>

</nav>
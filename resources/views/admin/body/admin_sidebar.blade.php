<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

<div data-simplebar="" class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="{{ url('/Admin/dashboard') }}" class="waves-effect">
                    <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right"></span>
                    <span>Dashboards</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-user"></i>
                    <span>Teacher</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ url('/create/teacher') }}">Add Teacher</a></li>
                    <li><a href="{{ url('/Admin/teacherlist') }}">View Teacher</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-user"></i>
                    <span>Oparetor</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ url('/create/oparetor') }}">Add Oparetor</a></li>
                    <li><a href="{{ url('/Admin/oparetorlist') }}">View Oparetor</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-user"></i>
                    <span>Student</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ url('/create/student') }}">Add Student</a></li>
                    <li><a href="{{ url('/Admin/studentlist') }}">View Student</a></li>
                </ul>
            </li>
         
             <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-book"></i>
                    <span>Subject</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ url('/create/subject') }}">Add Subject</a></li>
                    <li><a href="{{ url('/Admin/subjectlist') }}">View Subject</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-layout"></i>
                    <span>Section</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ url('/add/section') }}">Add Section</a></li>
                    <li><a href="{{ url('/Admin/sectionlist') }}">View section</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->
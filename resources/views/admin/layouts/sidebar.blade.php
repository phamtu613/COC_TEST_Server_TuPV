<div class="slimscroll-menu">

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <li class="menu-title">Admin</li>

            {{-- register course --}}
            <li>
                <a href="javascript: void(0);">
                    <i class="fe-pie-chart"></i>
                    <span> Register the course </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="{{ route('admin.register-course.index') }}">List register</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

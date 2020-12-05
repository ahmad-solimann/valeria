<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src="/dashboard/img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
                <h2 class="h5">{{auth()->user()->name}}</h2><span>System Admin</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="/index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Main</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="#usersdropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Users </a>
                    <ul id="usersdropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="{{route('users.create')}}">Add User</a></li>
                        <li><a href="{{route('users.index')}}">Show Users</a></li>
                    </ul>
                </li>
                <li><a href="#projectsdropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-website"></i>Projects </a>
                    <ul id="projectsdropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">Create Project</a></li>
                        <li><a href="#">Show Projects</a></li>
                    </ul>
                </li>
                            </ul>
        </div>
        <div class="admin-menu">
            <h5 class="sidenav-heading">Second menu</h5>
            <ul id="side-admin-menu" class="side-menu list-unstyled">
                <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
                <li> <a href="#"> <i class="icon-flask"> </i>Demo
                        <div class="badge badge-info">Special</div></a></li>
                <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
                <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset("admin/assets/images/logo-sm.png")}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset("admin/assets/images/logo-light.png")}}" alt="" height="24">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset("admin/assets/images/logo-sm.png")}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset("admin/assets/images/logo-dark.png")}}" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarBlog" data-bs-toggle="collapse">
                        <i data-feather="file-text"></i>
                        <span> Blog </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBlog">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.blog.index') }}">All Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.blog.create') }}">Add Blog</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarWork" data-bs-toggle="collapse">
                        <i data-feather="archive"></i>
                        <span> Work </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarWork">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.work.index') }}">All Work</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.work.create') }}">Add Work</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>
<aside class="main-sidebar sidebar-dark-primary elevation-4 " id="offcanvas">
    <!-- Brand Logo -->
    <a href="{{route('admin/home')}}" class="brand-link">
        <img src='{{asset("dist/img/AdminLTELogo.png")}}' alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light" style="color:#1aa67d ">blogpost</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{asset('dist/img/mypic.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="font-family: 'Courier New', Monospace;color:#1aa67d">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('post.index')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#1aa67d">Posts</p>
                            </a>
                        </li>
                        @can('posts.category',Auth::user())
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#1aa67d">Categories</p>
                            </a>
                        </li>
                        @endcan
                        @can('posts.tag',Auth::user())
                        <li class="nav-item">
                            <a href="{{route('tag.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#1aa67d">Tags</p>
                            </a>
                        </li>
                        @endcan
                        <li class="nav-item">
                            <a href="{{route('user.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#1aa67d">Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('role.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#1aa67d">Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('permission.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#1aa67d">Permissions</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

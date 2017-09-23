<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{url('/dashboard')}}"><i class="fa fa-info fa-fw"></i> Category Info<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/category/add')}}">Add Category</a>
                    </li>
                    <li>
                        <a href="{{url('/category/all')}}">Categories List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url('/dashboard')}}"><i class="fa fa-user fa-fw"></i> User Info<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                    <a href="{{ url('/user/add')}}">Add User</a>
                    </li>
                    <li>
                    <a href="{{ url('/user/all')}}">User List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url('/dashboard')}}"><i class="fa fa-user fa-fw"></i> Portfolio Info<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                    <a href="{{ url('/Portfolio/add')}}">Add Portfolio</a>
                    </li>
                    <li>
                    <a href="{{ url('/Portfolio/all')}}">Portfolio List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url('/dashboard')}}"><i class="fa fa-user fa-fw"></i> Products Info<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                    <a href="{{ url('/Products/add')}}">Add Products</a>
                    </li>
                    <li>
                    <a href="{{ url('/Products/all')}}">Products List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url('/dashboard')}}"><i class="fa fa-user fa-fw"></i> Menufecture Info<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/category/add')}}">Add Manufectures</a>
                    </li>
                    <li>
                        <a href="{{url('/category/all')}}">Manufectures List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url('/dashboard')}}"><i class="fa fa-user fa-fw"></i> Product Info<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/category/add')}}">Add Product</a>
                    </li>
                    <li>
                        <a href="{{url('/category/all')}}">Products List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-list fa-fw"></i> Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/page/add')}}">Add Page</a>
                    </li>
                    <li>
                        <a href="{{url('/page/all')}}">All Pages</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-list fa-fw"></i> Theme Option<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="blank.html">Add Page</a>
                    </li>
                    <li>
                        <a href="login.html">All Pages</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
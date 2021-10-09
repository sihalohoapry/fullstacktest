<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="admin" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">TEST</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a class="d-block"></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->


                <li class="nav-item has-treeview menu-open">
                    <a href="" class="nav-link 
                        
                        ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="{{ route('customer.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customer</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('agent.index') }}" class="nav-link  ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Agent</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link ">
                        <i class="nav-icon fas fa-school"></i>
                        <p>
                            Product
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('detail-order.index') }}" class="nav-link ">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Order
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link  ">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" id="logout">
                @csrf
                <a href="click=" document.getElementById('logout').submit()">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
                </a>
                </form>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
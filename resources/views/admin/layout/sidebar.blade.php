<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-cyan elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/template/index3.html') }}" class="brand-link bg-lightblue">
        <img src="{{ asset('/template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/image/default.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                {{-- <a href="" class="d-block">{{Auth::user()->name}}</a> --}}
                <span class="d-block">{{Auth::user()->name}}</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact text-sm" data-widget="treeview" role="menu" data-accordion="true">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('logout')}} " class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutPost').submit();">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>LogOut</p>
                                <form action="{{ route('logout')}}" method="post" id="logoutPost" style="display:none;">@csrf</form>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Anggrek
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('anggrek') }}" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Data Anggrek</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Data Api Anggrek</p>
                            </a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Cemilan-ku
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('cemilan') }}" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Data Cemilan</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Data Api Cemilan</p>
                            </a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            User & Transaksi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            {{-- <a href="{{ route('admin.konsumen') }}" class="nav-link"> --}}
                            <a href="{{ url('konsumen') }}" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Data Konsumen</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('order') }}" class="nav-link">
                            {{-- <a href="#" class="nav-link"> --}}
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Data Penjualan</p>
                            </a>
                        </li>
                    </ul>

                </li>

                {{-- <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            barang
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('barang') }}" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Data Barang php</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Data Barang API</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Data Ayam</p>
                            </a>
                        </li>
                    </ul>

                </li> --}}



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

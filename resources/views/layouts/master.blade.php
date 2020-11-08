<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Nice admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="/admin/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/admin/dist/css/style.css" rel="stylesheet">
    <link href="/admin/dist/css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        footer {
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="/dashboard" class="logo">
                            <!-- Logo icon -->
                            {{-- <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="/admin/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="/admin/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b> --}}
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <span class="logo-judul">
                                    CONTROL ROOM
                                </span>
                                {{-- <!-- dark Logo text -->
                                <img src="/admin/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="/admin/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> --}}
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/admin/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated text-black-50">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My
                                    Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti ti-close"></i>
                                    {{ __('Logout') }}
                                </a>

                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard/" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/surat" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="hide-menu">Permintaan Surat</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <div class="dropdown">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                    <i class="mdi mdi-av-timer"></i>
                                    <span class="hide-menu">Profil Desa</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/visi-misi">Visi Misi</a>
                                    <a class="dropdown-item" href="/sejarah-desa">Sejarah Desa</a>
                                    <a class="dropdown-item" href="/gambaran-umum">Gambaran Umum</a>
                                    <a class="dropdown-item" href="/staff-kategori">Kategori Staff</a>
                                    <a class="dropdown-item" href="/staff">Staff</a>
                                    <a class="dropdown-item" href="#">Profil Wilayah Desa</a>
                                </div>
                            </div>
                        </li> --}}
                        {{-- <li class="sidebar-item">
                            <div class="dropdown">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                    <i class="mdi mdi-av-timer"></i>
                                    <span class="hide-menu">Lembaga Masyarakat</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">LPMD</a>
                                    <a class="dropdown-item" href="#">Karang Taruna</a>
                                    <a class="dropdown-item" href="#">Linmas</a>
                                </div>
                            </div>
                        </li> --}}
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-basic.html" aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">Pelayanan</span>
                            </a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/nomer-penting" aria-expanded="false">
                                <i class="mdi mdi-contacts"></i>
                                <span class="hide-menu">Nomer Penting</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/user" aria-expanded="false">
                                <i class="mdi mdi-account"></i>
                                <span class="hide-menu">User</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/kegiatan" aria-expanded="false">
                                <i class="mdi mdi-airballoon"></i>
                                <span class="hide-menu">Kegiatan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <div class="dropdown">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                    <i class="mdi mdi-nature-people"></i>
                                    <span class="hide-menu">Potensi Desa</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/potensi">Potensi</a>
                                    <a class="dropdown-item" href="/potensi-kategori">Kategori Potensi</a>
                                </div>
                            </div>
                        </li>
                        <li class="sidebar-item">
                            <div class="dropdown">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                    <i class="mdi mdi-shopping"></i>
                                    <span class="hide-menu">Produk UKM</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/produk">Produk</a>
                                    <a class="dropdown-item" href="/produk-kategori">Kategori Produk</a>
                                </div>
                            </div>
                        </li>
                        <li class="sidebar-item">
                            <div class="dropdown">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                    <i class="mdi mdi-newspaper"></i>
                                    <span class="hide-menu">Berita</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/berita">Berita</a>
                                    <a class="dropdown-item" href="/berita-kategori">Kategori Berita</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            @yield('content')
            <footer class="footer text-center">
                2020 All Rights Reserved.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="/admin/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    @yield('javascript')
</body>

</html>

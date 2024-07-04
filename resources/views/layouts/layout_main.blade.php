<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ url('naive-bayes.png') }}" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="{{ url('adminlte') }}/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('adminlte') }}/dist/css/adminlte.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('adminlte') }}/dist/css/adminlte.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    {{-- select 2 css tambah  --}}
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet"
        href="{{ url('adminlte') }}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet"
        href="{{ url('adminlte') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/bs-stepper/css/bs-stepper.min.css">
    <link rel="stylesheet" href="{{ url('adminlte') }}/plugins/dropzone/min/dropzone.min.css">

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ url('adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div> --}}

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="{{ url('#') }}" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('main/home') }}" class="nav-link">Dashboard</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="{{ url('#') }}" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="{{ url('#') }}">
                        <i class="fa fa-outdent"></i> <b>Logout</b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="{{ url('#') }}" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ url('naive-bayes.png') }}" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        {{ auth()->user()->name }}
                                    </h3>
                                    <p class="text-sm">{{ auth()->user()->email }}</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ url('logout') }}" class="dropdown-item dropdown-footer">Log Out </a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="{{ url('#') }}" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="{{ url('#') }}"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('#') }}" class="brand-link">
                <img src="{{ url('naive-bayes.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Raport Siswa</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ url('#') }}" class="d-block">{{ auth()->user()->name }}</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('main/home') }}"
                                class="nav-link {{ Request::is('main/home*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        {{-- ADMINISTRATOR  --}}
                        @if (Auth::user()->user_jab_id == '1')
                            <li
                                class="nav-item {{ Request::is('main/tahun*') || Request::is('main/semester*') || Request::is('main/agama*') || Request::is('main/kelas*') || Request::is('main/kelompok*') || Request::is('main/mapel*') || Request::is('main/siswa*') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('main/tahun*') || Request::is('main/semester*') || Request::is('main/agama*') || Request::is('main/kelas*') || Request::is('main/kelompok*') || Request::is('main/mapel*') || Request::is('main/siswa*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-database"></i>
                                    <p>
                                        Master Data
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('main/tahun') }}"
                                            class="nav-link {{ Request::is('main/tahun*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Data tahun akademik
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/semester') }}"
                                            class="nav-link {{ Request::is('main/semester*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Data Semester
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/agama') }}"
                                            class="nav-link {{ Request::is('main/agama*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Data agama
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/kelas') }}"
                                            class="nav-link {{ Request::is('main/kelas*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Data kelas
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/kelompok') }}"
                                            class="nav-link {{ Request::is('main/kelompok*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Data kelompok
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/mapel') }}"
                                            class="nav-link {{ Request::is('main/mapel*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Data mapel
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/siswa') }}"
                                            class="nav-link {{ Request::is('main/siswa*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Data siswa
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- Pendataan Nilai --}}
                            <li
                                class="nav-item {{ Request::is('main/nilai_harian*') || Request::is('main/tugas*') || Request::is('main/uas*') || Request::is('main/uts*') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('main/nilai_harian*') || Request::is('main/tugas*') || Request::is('main/uas*') || Request::is('main/uts*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-arrow-up"></i>
                                    <p>
                                        Nilai
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('main/nilai_harian') }}"
                                            class="nav-link {{ Request::is('main/nilai_harian*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Nilai Harian
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/tugas') }}"
                                            class="nav-link {{ Request::is('main/tugas*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Nilai Tugas
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/uas') }}"
                                            class="nav-link {{ Request::is('main/uas*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Nilai UAS
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/uts') }}"
                                            class="nav-link {{ Request::is('main/uts*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Nilai UTS
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- Laporan per tanggal  --}}
                            <li
                                class="nav-item {{ Request::is('main/laporan/harian*') || Request::is('main/laporan/tugas*') || Request::is('main/laporan/uas*') || Request::is('main/laporan/uts*') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('main/laporan/harian*') || Request::is('main/laporan/tugas*') || Request::is('main/laporan/uas*') || Request::is('main/laporan/uts*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-flag"></i>
                                    <p>
                                        Laporan
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('main/laporan/harian') }}"
                                            class="nav-link {{ Request::is('main/laporan/harian*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Nilai Harian
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/laporan/tugas') }}"
                                            class="nav-link {{ Request::is('main/laporan/tugas*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Nilai tugas
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/laporan/uas') }}"
                                            class="nav-link {{ Request::is('main/laporan/uas*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Nilai uas
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('main/laporan/uts') }}"
                                            class="nav-link {{ Request::is('main/laporan/uts*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Nilai uts
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- Laporan per tanggal  --}}
                            {{-- Raport per mahasiswa  --}}
                            <li class="nav-item {{ Request::is('main/raport/tengah*') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('main/raport/tengah*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file-pdf"></i>
                                    <p>
                                        Raport
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('main/raport/tengah') }}"
                                            class="nav-link {{ Request::is('main/raport/tengah*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Cetak Per SIswa
                                            </p>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="{{ url('main/raport/kkm') }}"
                                            class="nav-link {{ Request::is('main/raport/kkm*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                KKM
                                            </p>
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>
                            {{-- Raport per mahasiswa  --}}
                            <li class="nav-header">AKUN PETUGAS </li>
                            <li class="nav-item">
                                <a href="{{ url('main/user') }}"
                                    class="nav-link {{ Request::is('main/user*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Data user
                                    </p>
                                </a>
                            </li>
                        @endif

                        {{-- ADMINISTRATOR  --}}

                        {{-- GURU  --}}

                        @if (Auth::user()->user_jab_id == '2')
                            <li class="nav-header">Master Data </li>
                            <li class="nav-item">
                                <a href="{{ url('main/siswa') }}"
                                    class="nav-link {{ Request::is('main/siswa*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Data siswa
                                    </p>
                                </a>
                            </li>
                            {{-- Pendataan Nilai --}}
                            <li class="nav-header">Nilai </li>
                            <li class="nav-item">
                                <a href="{{ url('main/nilai_harian') }}"
                                    class="nav-link {{ Request::is('main/nilai_harian*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Nilai Harian
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('main/tugas') }}"
                                    class="nav-link {{ Request::is('main/tugas*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Nilai Tugas
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('main/uas') }}"
                                    class="nav-link {{ Request::is('main/uas*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Nilai UAS
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('main/uts') }}"
                                    class="nav-link {{ Request::is('main/uts*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Nilai UTS
                                    </p>
                                </a>
                            </li>
                        @endif

                        {{-- GURU  --}}

                        {{-- WALI KELAS DAN KEPSEK --}}
                        @if (Auth::user()->user_jab_id == '3' || Auth::user()->user_jab_id == '4')
                            <li class="nav-header">Master Data </li>
                            <li class="nav-item">
                                <a href="{{ url('main/siswa') }}"
                                    class="nav-link {{ Request::is('main/siswa*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Data siswa
                                    </p>
                                </a>
                            </li>
                            {{-- Laporan  --}}
                            <li class="nav-header">Laporan </li>
                            <li class="nav-item">
                                <a href="{{ url('main/laporan/harian') }}"
                                    class="nav-link {{ Request::is('main/laporan/harian*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Nilai Harian
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('main/laporan/tugas') }}"
                                    class="nav-link {{ Request::is('main/laporan/tugas*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Nilai tugas
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('main/laporan/uts') }}"
                                    class="nav-link {{ Request::is('main/laporan/uts*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Nilai uts
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('main/laporan/uas') }}"
                                    class="nav-link {{ Request::is('main/laporan/uas*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Nilai uas
                                    </p>
                                </a>
                            </li>

                            {{-- Raport per mahasiswa  --}}
                            <li class="nav-item {{ Request::is('main/raport/tengah*') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::is('main/raport/tengah*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-file-pdf"></i>
                                    <p>
                                        Raport
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('main/raport/tengah') }}"
                                            class="nav-link {{ Request::is('main/raport/tengah*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Cetak Per SIswa
                                            </p>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="{{ url('main/raport/kkm') }}"
                                            class="nav-link {{ Request::is('main/raport/kkm*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                KKM
                                            </p>
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>
                            {{-- Raport per mahasiswa  --}}
                        @endif
                        {{-- WALI KELAS DAN KEPSEK  --}}
                    </ul>
                </nav>
                <!-- Sidebar Menu End -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $title }} </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('main/home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{ $title }} </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">RAPORT</a>
                ||</strong>
            Suportby Raport Siswa.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ url('adminlte') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ url('adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('adminlte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('adminlte') }}/dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ url('adminlte') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="{{ url('adminlte') }}/plugins/raphael/raphael.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ url('adminlte') }}/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ url('adminlte') }}/dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('adminlte') }}/dist/js/pages/dashboard2.js"></script>

    <!-- Bootstrap 4 -->
    <!-- DataTables  & Plugins -->
    <script src="{{ url('adminlte') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('adminlte') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Select2 -->
    <script src="{{ url('adminlte') }}/plugins/select2/js/select2.full.min.js"></script>
    <!-- Select2 -->
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ url('adminlte') }}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="{{ url('adminlte') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ url('adminlte') }}/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="{{ url('adminlte') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="{{ url('adminlte') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('adminlte') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- BS-Stepper -->
    <script src="{{ url('adminlte') }}/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="{{ url('adminlte') }}/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <!-- AdminLTE for demo purposes -->

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                placeholder: 'Pilih Siswa',
                theme: 'bootstrap4'
            })
            $('.tahun').select2({
                placeholder: 'Pilih Tahun',
                theme: 'bootstrap4'
            })
            $('.semester').select2({
                placeholder: 'Pilih semester',
                theme: 'bootstrap4'
            })
            $('.mapel').select2({
                placeholder: 'Pilih mapel',
                theme: 'bootstrap4'
            })
        });
    </script>
</body>

</html>

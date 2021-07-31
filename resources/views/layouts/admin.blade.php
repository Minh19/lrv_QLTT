
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('public/ad123')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{url('public/ad123')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('public/ad123')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('public/ad123')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public/ad123')}}/dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('public/ad123')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('public/ad123')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('public/ad123')}}/plugins/summernote/summernote-bs4.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{url('public/ad123')}}/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="{{url('public/ad123')}}/dist/css/polipop.default.css" />
    <link rel="stylesheet" href="{{url('public/ad123')}}/dist/css/polipop.core.css" />

    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div  id="preloader"class="preloader flex-column justify-content-center " >
        <div class="ctn-preloader" id="ctn-preloader">
        <div class="round_spinner" style="margin-left: 650px;">
            <div class="spinner"></div>
            <div class="text"><img src="{{url('public/ad123')}}/dist/img/ueh_logo.png" alt="UEHLogo1" height="200" width="200"></div>
        </div>  
        </div>
    </div>
    <div class="">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-lightt navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">QUẢN LÝ CÔNG TÁC HOẠT ĐỘNG ĐOÀN HỘI UEH</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
               

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="" href="#" role="button">
                    <i class="nav-icon far fa-user-circle"></i> Hello ABC
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
    </div>
    <div>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('admin.dashboard')}}" class="brand-link">
                <img src="{{url('public/ad123')}}/dist/img/ueh.png" alt="UEHLogo" class="brand-image img-circle elevation-3" style="">
                <span class="brand-text font-weight-light ">Admin Dashboard</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item ">
                            <a href="{{route('HopThuCuaToi.index')}}" class="nav-link ">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>Hộp thư của tôi</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('QuanLyVanBan.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Quản lý văn bản</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#" Style="pointer-events: none;cursor: default;" class="nav-link ">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>Quản lý lịch tuần</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" Style="pointer-events: none;cursor: default;"class="nav-link">
                            <i class="nav-icon fas fa-clipboard"></i>
                            <p>Quản lý mượn phòng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" Style="pointer-events: none;cursor: default;"class="nav-link">
                            <i class="nav-icon far fa-user-circle"></i>
                            <p>Quản lý tài khoản</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-archive"></i>
                                <p>Quản lý hoạt động</p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" Style="pointer-events: none;cursor: default;" class="nav-link">
                                        <i class="fas fa-angle-right"></i>
                                        <p>Quản lý loại hoạt động</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" Style="pointer-events: none;cursor: default;" class="nav-link">
                                        <i class="fas fa-angle-right"></i>
                                        <p>Thêm chi tiết hoạt động</p>
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
    </div>
    <div class="content-wrapper">
        @yield('main')


        
    </div>
    <div>
        <footer class="main-footer">
        © 2021 Bản quyền Trường Đại học Kinh tế TP. Hồ Chí Minh
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{url('public/ad123')}}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{url('public/ad123')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{url('public/ad123')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{url('public/ad123')}}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{url('public/ad123')}}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{url('public/ad123')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{url('public/ad123')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{url('public/ad123')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{url('public/ad123')}}/plugins/moment/moment.min.js"></script>
    <script src="{{url('public/ad123')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{url('public/ad123')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{url('public/ad123')}}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{url('public/ad123')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url('public/ad123')}}/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('public/ad123')}}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{url('public/ad123')}}/dist/js/pages/pre-loader.js"></script>
    <script src="{{url('public/ad123')}}/dist/js/pages/dashboard.js"></script>

    <script src="{{url('public/ad123')}}/dist/polipop.js"></script> <!-- virtual file stored in memory and served by webpack-dev-server -->
    <script src="{{url('public/ad123')}}/assets/js/app.js"></script>
</body>
</html>
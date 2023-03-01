
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bantuan Gerobak Cahaya</title>
  <style type="text/css"> 
        .preloader{
          top: 0;
          left: 0; 
          width: 100%; 
          height: 90%; 
          z-index: 9999; 
          position: fixed; 
          background-color: white; 
        }

        .loading{
          top: 50%; 
          left: 50%; 
          transform: translate(-50%, -50%);
          position: absolute; 
          /* animation: mymove 30s infinite alternate; */
        }
    </style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">

<div class="preloader">
<div class="loading"> 
  <img src="{{asset('gambar/lg2.gif')}}">
</div>
</div>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-teal navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      

      <!-- <li class="nav-item">
          <a class="nav-link" data-widget="logout" href="/logout" role="button"><i class="fas fa-door">Sign Out</i>
            <!-- <img src="{{ asset('gambar/gerobak.png') }}" class="img-circle elevation mt-1 pt-1 pb-1 mb-1 col-sm-3"></i> -->
<!-- </a>
</li>  -->
          <!-- <a href="{{ route('logout') }}" class="dropdown-item">
          Sign Out
</a> -->
</div>
</li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-teal">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('gambar/smki.png')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-dark">SMKI UTAMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('gambar/gerobak.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Gerobak Cahaya</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu">
              <a href="/beranda" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home /Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          </li>
          <li class="nav-item menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('pemohon') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Pemohon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/survey" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kualifikasi Survey</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/galeri" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Foto Gerobak</p>
                </a>
              </li>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sign Out
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
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
            <h1 class="m-0">Dashboard</h1>
</div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlah_pemohon }}</h3>

                <p>Daftar Pemohon</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/pemohon" class="small-box-footer">Info lebih lengkap<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlah_survey }}</h3>

                <p>Kualifikasi Survey</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/survey" class="small-box-footer">Info lebih lengkap<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlah_galeri }}</h3>

                <p>Foto Gerobak</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/galeri" class="small-box-footer">Info lebih lengkap<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->
        <!-- /.row -->
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022-2023 <a href="#">Gerobak Cahaya</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript"> 
      $(document).ready(function(){
        $('preloader').delay('10000').fadeout(){;
      });
</script>
</body>
</html>

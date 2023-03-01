<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bantuan Gerobak Cahaya | Daftar Survey BGC</title>
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
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-teal">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="{{asset('gambar/smki.png')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SMKI UTAMA</span>
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
              <a href="/beranda" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home /Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            <li class="nav-item menu">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Menu
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <!-- <ul class="nav nav-treeview"> -->
                <li class="nav-item">
                  <a href="/pemohon" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Daftar Pemohon</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/survey" class="nav-link active">
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
              <h1 class="m-0">Data Survey</h1>
            </div><!-- /.col -->
            <!-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              </ol>
            </div>/.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="container">
        <div class="card mt-5">
          <div class="card-body">
            <form method="post" action="/survey/store" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="control-label col-sm-2">NIK</label>
                <div class="col-sm-10">
                  <select class="form-control" name="nik">
                    @foreach($pemohon as $key => $val):
                    <option value="<?= $val['nik'] ?>">{{$val['nik']}} || {{$val['nama']}}</option>
                    @endforeach
                  </select>
                  @if($errors->has('nik'))
                    <div class="text-danger">
                      {{ $errors->first('nik')}}
                    </div>
                    @endif

                  <div class="form-group">
                    <label>Nama </label>
                    <input type="text" name="nama" class="form-control"></input>

                    @if($errors->has('nama'))
                    <div class="text-danger">
                      {{ $errors->first('nama')}}
                    </div>
                    @endif

                    </div>

                  <div class="form-group">
                    <label>Nama Pensurvey</label>
                    <input type="text" name="nama_pensurvey" class="form-control"></input>

                    @if($errors->has('nama_pensurvey'))
                    <div class="text-danger">
                      {{ $errors->first('nama_pensurvey')}}
                    </div>
                    @endif

                    </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2">Foto</label>
                    <div class="input-group mb-3">
                      <tr>
                        <td>
                          <input type="file" name="foto[]" id="inputGroupFile" multiple required>
                        </td>
                      </tr>
                    </div>
                    
                      <div class="form-group">
                        <td>
                        <a href="/survey" class="btn btn-danger">Kembali</a>
                    </td>
                    <td>
                        <input type="submit" class="btn btn-success" onClick="return confirm('Yakin ingin menyimpan data ini')" value="Simpan">
                    </td>
                    </div>

            </form>

          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
    </div>
  </div>
  </div><!-- /.card-body -->
  </div>
  <!-- /.card -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

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
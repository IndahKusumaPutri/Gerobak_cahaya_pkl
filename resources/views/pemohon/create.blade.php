<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bantuan Gerobak Cahaya | Input Pemohon Baru</title>
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
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
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
              <a href="{{ route('pemohon') }}" class="nav-link active ">
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
            <li class="nav-item menu">
              <a href="/logout" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Sign Out
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
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
              <h1 class="m-0">Data Pemohon</h1>
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
        <div class="card card-teal card-outline mt-3">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-head container-fluid" style="margin-top: 10px;">
                <form method="post" action="/pemohon/store" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>NIK</label>
                        <input type="number" name="nik" placeholder="Masukkan NIK Anda" class="form-control">

                        @if($errors->has('nik'))
                        <div class="text-danger">
                          {{ $errors->first('nik')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" class="form-control">

                        @if($errors->has('nama'))
                        <div class="text-danger">
                          {{ $errors->first('nama')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <p><input type="radio" name="jenkel" value="laki-laki">&nbsp Laki-laki</input>
                          <input type="radio" name="jenkel" value="perempuan">&nbsp Perempuan</input>
                        </p>
                        @if($errors->has('jenkel'))
                        <div class="text-danger">
                          {{ $errors->first('jenkel')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Anda"
                          class="form-control"></input>

                        @if($errors->has('tempat_lahir'))
                        <div class="text-danger">
                          {{ $errors->first('tempat_lahir')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">

                        @if($errors->has('tanggal_lahir'))
                        <div class="text-danger">
                          {{ $errors->first('tanggal_lahir')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>NO KK</label>
                        <input type="number" name="no_kk" placeholder="Masukkan Nomor Kartu Keluarga Anda"
                          class="form-control">

                        @if($errors->has('no_kk'))
                        <div class="text-danger">
                          {{ $errors->first('no_kk')}}
                        </div>
                        @endif

                      </div>
                      <!-- <div class="col-md-4"> -->
                      <div class="form-group">
                        <label>Telepon</label>
                        <input type="tel" name="telp" placeholder="Masukkan Nomor Telepon Pemohon" class="form-control">

                        @if($errors->has('telp'))
                        <div class="text-danger">
                          {{ $errors->first('telp')}}
                        </div>
                        @endif

                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Masukkan Alamat Email Pemohon" class="form-control">

                        @if($errors->has('email'))
                        <div class="text-danger">
                          {{ $errors->first('email')}}
                        </div>
                        @endif

                      </div>
                    </div>
                    
                    <div class="col-md-4">

                    <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" name="provinsi" placeholder="Masukkan Provinsi Pemohon" class="form-control">

                        @if($errors->has('provinsi'))
                        <div class="text-danger">
                          {{ $errors->first('provinsi')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" name="kabupaten" placeholder="Masukkan Kabupaten Pemohon" class="form-control">

                        @if($errors->has('kabupaten'))
                        <div class="text-danger">
                          {{ $errors->first('kabupaten')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" name="kecamatan" placeholder="Masukkan Kecamatan Pemohon" class="form-control">

                        @if($errors->has('kecamatan'))
                        <div class="text-danger">
                          {{ $errors->first('kecamatan')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Kelurahan</label>
                        <input type="text" name="kelurahan" placeholder="Masukkan Kelurahan Pemohon" class="form-control">

                        @if($errors->has('kelurahan'))
                        <div class="text-danger">
                          {{ $errors->first('kelurahan')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" placeholder="Masukkan Alamat Detail Pemohon" class="form-control"></textarea>

                        @if($errors->has('alamat'))
                        <div class="text-danger">
                          {{ $errors->first('alamat')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Sumber Penghasilan Sebelumnya</label>
                        <input type="text" name="sps" placeholder="Masukkan Sumber Penghasilan Sebelumnya" class="form-control">

                        @if($errors->has('sps'))
                        <div class="text-danger">
                          {{ $errors->first('sps')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Jumlah Penghasilan Sebelumnya</label>
                        <input type="number" name="jps" placeholder="Masukkan Jumlah Penghasilan Sebelumnya" class="form-control">

                        @if($errors->has('jps'))
                        <div class="text-danger">
                          {{ $errors->first('jps')}}
                        </div>
                        @endif

                      </div>

                      <div class="form-group">
                        <label>Rencana Usaha</label>
                        <input type="text" name="rencana_usaha" placeholder="Masukkan Rencana Usaha" class="form-control">

                        @if($errors->has('rencana_usaha'))
                        <div class="text-danger">
                          {{ $errors->first('rencana_usaha')}}
                        </div>
                        @endif

                      </div>
                    </div>
                    <!-- <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
    
                        @if($errors->has('email'))
                        <div class="text-danger">
                          {{ $errors->first('email')}}
                        </div>
                        @endif
    
                      </div> -->

                    <!-- </div>
                    <div class="col-md-4">
                      
                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
    
                        @if($errors->has('alamat'))
                        <div class="text-danger">
                          {{ $errors->first('alamat')}}
                        </div>
                        @endif
    
                      </div>
    
                      <div class="form-group">
                        <label>Kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control">
    
                        @if($errors->has('kelurahan'))
                        <div class="text-danger">
                          {{ $errors->first('kelurahan')}}
                        </div>
                        @endif
    
                      </div>
    
                      <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control">
    
                        @if($errors->has('kecamatan'))
                        <div class="text-danger">
                          {{ $errors->first('kecamatan')}}
                        </div>
                        @endif
    
                      </div>
    
                      <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" name="kabupaten" class="form-control">
    
                        @if($errors->has('kabupaten'))
                        <div class="text-danger">
                          {{ $errors->first('kabupaten')}}
                        </div>
                        @endif
    
                      </div>
    
                      <div class="form-group">
                        <label>Provinsi</label>
                        <input tpe="text" name="provinsi" class="form-control">
    
                        @if($errors->has('provinsi'))
                        <div class="text-danger">
                          {{ $errors->first('provinsi')}}
                        </div>
                        @endif
    
                      </div> -->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Jenis Usaha</label>
                        <p><input type="radio" name="jenis_usaha" value="perbaikan">&nbsp Perbaikan</input>
                          <input type="radio" name="jenis_usaha" value="baru">&nbsp Baru</input>
                        </p>

                        @if($errors->has('jenis_usaha'))
                        <div class="text-danger">
                          {{ $errors->first('jenis_usaha')}}
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
                    <!-- <div class="form-group">
                      <tr>
                        <td>
                          <input type="file" name="foto2" id="inputGroupFile">
                        </td>
                      </tr>
                    </div>
                    <div class="form-group">
                      <tr>
                        <td>
                          <input type="file" name="foto3" id="inputGroupFile">
                        </td>
                      </tr>
                    </div>
                    <div class="form-group">
                      <tr>
                        <td>
                          <input type="file" name="foto4" id="inputGroupFile">
                        </td>
                      </tr>
                    </div>
                    <div class="form-group">
                      <tr>
                        <td>
                          <input type="file" name="foto5" id="inputGroupFile">
                        </td>
                      </tr>
                    </div> -->
                    <div class="form-group">
                      <td>
                      <input type="submit" class="btn btn-success"
                        onClick="return confirm('Yakin anda ingin menyimpan data ini?')"></button>
                        </td>
                        <td>
                          <a href="/pemohon" class="btn btn-primary">Kembali</a>
                        </td>
                    </div>
                  </div>
              </div>
              </form>
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->


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
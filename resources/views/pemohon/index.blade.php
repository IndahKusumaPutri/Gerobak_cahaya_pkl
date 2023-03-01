
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bantuan Gerobak Cahaya | Daftar Pemohon BGC</title>
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
  <!-- DataTables
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}"> -->
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
              <a href="/beranda" class="nav-link">
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
            <!-- <ul class="nav nav-treeview"> -->
              <li class="nav-item">
                <a href="{{ route('pemohon') }}" class="nav-link active">
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
        @if(session('Data ditambah'))
        <div class="alert alert-primary" role="alert">
          {{session('Data ditambah')}}
</div>
@endif

@if(session('Data diubah'))
        <div class="alert alert-success" role="alert">
          {{session('Data diubah')}}
</div>
@endif

@if(session('Data dihapus'))
        <div class="alert alert-danger" role="alert">
          {{session('Data dihapus')}}
</div>
@endif


<!-- <div class="row mb-2"> -->
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
                <div class="card-body">
                  <style type="text/css">
                    .pagination li{
                      float: left;
                      list-style-type: none;
                      margin:5px;
                    }
                    </style>
                    
                    <a href="/pemohon/create" class="btn btn-success"><i class="fa fa-plus"></i> Input Pemohon Baru</a>
                    <a href="/cetak-pemohon" target="_blank" class="btn btn-primary">Cetak Laporan</a>
                    <br/>
                    <br/>
                    <div class="card-body table-responsive p-0">
                    <table class="table table-striped" id="table-data">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemohon as $p)
                            <tr>
                                <td>{{ $p->nik }}</td>
                                <td><b>{{ $p->nama }}</b></td> 
                                <td>{{ $p->telp }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>
                                  @php
                                    $foto = App\Pemohonimage::where('pemohon_unique_id',$p->unique_id)->get();
                                  @endphp

                                  @foreach ($foto as $item)
                                  <a href="{{ asset('images/'. $p->foto ) }}/{{ $item->image}}" target="_blank" rel="noopener noreferrer">    
                                    <img src="{{ asset('images/'. $p->foto ) }}/{{ $item->image}}" style="height:50px; width:50px" alt="">
                                  </a>
                                  @endforeach

                                  <!-- <img src="{{ asset('gambar/'. $p->foto ) }}" height="10%" width="10%" alt="">
                                  <a href="{{ asset('gambar/'. $p->foto ) }}" target="_blank" rel="noopener noreferrer"></a>
                                  <img src="{{ asset('gambar/'. $p->foto2 ) }}" height="10%" width="10%" alt="">
                                  <a href="{{ asset('gambar/'. $p->foto2 ) }}" target="_blank" rel="noopener noreferrer"></a>
                                  <img src="{{ asset('gambar/'. $p->foto3 ) }}" height="10%" width="10%" alt="">
                                  <a href="{{ asset('gambar/'. $p->foto3 ) }}" target="_blank" rel="noopener noreferrer"></a>
                                  <img src="{{ asset('gambar/'. $p->foto4 ) }}" height="10%" width="10%" alt="">
                                  <a href="{{ asset('gambar/'. $p->foto4 ) }}" target="_blank" rel="noopener noreferrer"></a>
                                  <img src="{{ asset('gambar/'. $p->foto5 ) }}" height="10%" width="10%" alt="">
                                  <a href="{{ asset('gambar/'. $p->foto5 ) }}" target="_blank" rel="noopener noreferrer"></a></td> -->
                                <td><label class="label label-success">{{ ($p->status == 1) ? 'Process' : 'Waiting' }}</label></td>
                                </td>
                                <td>
                                    @if($p->status == 0)
                                    <a href="/pemohon/status/{{ $p->nik }}" class="btn btn-sm btn-primary" onClick="return confirm('Yakin ingin memproses data ini?')">Proses</a>
                                    @else
                                    <a href="#" class="btn btn-sm btn-success" disabled>Masa Proses</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="/pemohon/show/{{ $p->nik }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                </td>
                                <td>
                                    <a href="/pemohon/edit/{{ $p->nik }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                <a href="/pemohon/destroy/{{ $p->nik }}" class="btn btn-danger" onClick="return confirm('Yakin ingin menghapus rasa ini?')"><i class="fa fa-trash"></i></a>
</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br/>
                    Halaman : {{ $pemohon->currentPage() }}<br/>
                    Jumlah Data : {{ $pemohon->total() }}<br/>
                    Data Per Halaman : {{ $pemohon->perPage() }}<br/>

                    {{ $pemohon->links() }}
                </div>
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
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript"> 
      $(document).ready(function(){
        $('preloader').delay('10000').fadeout(){;
      });
</script>

<script>
    if ($('#table-data')) {
        $('#table-data').DataTable()
    }
</script>
</body>
</html>
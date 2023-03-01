
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
</div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="form-group">
        <p align="center"><b>Laporan Data Pemohon</b></p>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
    <tr>
        <th>NIK</th>
        <th>Nama</th>
        <th>No KK</th>
        <th>Telp</th>
        <th>SPS</th>
        <th>JPS</th>
        <th>Rencana Usaha</th>
        <th>Alamat</th>
        <th>Provinsi</th>
        <th>Kabupaten</th>
        <th>Kecamatan</th>
        <th>Kelurahan</th>
    </tr>
    @foreach ($cetakPertanggal as $item)
    <tr>
        <!-- <td>{{ $loop->iteration }}</td> -->
        <td>{{ $item->nik }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->no_kk }}</td>
        <td>{{ $item->telp }}</td>
        <td>{{ $item->sps }}</td>
        <td>{{ $item->jps }}</td>
        <td>{{ $item->rencana_usaha }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->provinsi }}</td>
        <td>{{ $item->kabupaten }}</td>
        <td>{{ $item->kecamatan }}</td>
        <td>{{ $item->kelurahan }}</td>
        
    </tr>
    @endforeach
</table>
          <!-- ./col -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
    window.print();
    </script>
    
</body>
</html>

  <!-- Main content -->
      
  <div class="card-body">
                    <a href="/survey/create" class="btn btn-success">Input Data Survey Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($survey as $p)
                            <tr>
                                <td>
                                  <p><b>{{ $p->nama }}</b></p>
                                  <p>{{ $p->nik }}</p>
                                </td>
                                <td>
                                <a href="{{ asset('gambar/'. $p->foto ) }}" target="_blank" rel="noopener noreferrer"><img src="{{ asset('gambar/'. $p->foto ) }}" height="10%" width="10%" alt=""></a></td>
                                <td><label class="label label-success">{{ ($p->status == 0) ? 'Lolos' : 'Process' }}</label></td>
                                </td>
                                <td>
                                    @if($p->status == 1)
                                    <a href="/survey/status/{{ $p->nik }}" class="btn btn-sm btn-warning">ACC</a>
                                    @else
                                    <a href="#" class="btn btn-sm btn-success" disabled>Lolos</a>
                                    @endif
                                    <a href="/survey/show/{{ $p->nik }}" class="btn btn-danger">Detail</a>
                                </td>
</td>
<!-- <td>
    <form method="post" action="/survey/destroy{{ $p->nik }}"> {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <td>
          <a href="/pemohon/destroy/{{ $p->nik }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        </td>
      </form>
</td> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
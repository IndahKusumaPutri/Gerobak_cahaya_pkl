    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">Ubah Data Warga</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="/pemohon">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Data Warga</li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 10px;">
                    <div class="card-header">
                        <div class="float-sm-left">
                            <p>Ubah Data Warga</p>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="/pemohon/edit/{{ $pemohon->nik }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="POST">
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Nama Balita</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik"
                                        value="{{ $pemohon->nik }}">
                                    @if ($errors->has('nik'))
                                        <div class="text-danger">
                                            {{ $errors->first('nik') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Nama Balita</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama"
                                        value="{{ $pemohon->nama }}">
                                    @if ($errors->has('nama'))
                                        <div class="text-danger">
                                            {{ $errors->first('nama') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <label for="jenkel">
                                        <input type="radio" name="jenkel"
                                            value="{{ $pemohon->jenkel == 'laki-laki' ? 'laki-laki' : 'laki-laki' }}"
                                            {{ $pemohon->jenkel == 'laki-laki' ? 'checked' : '' }}> &nbsp Laki-Laki &nbsp
                                        &nbsp &nbsp
                                        <input type="radio" name="jenkel"
                                            value="{{ $pemohon->jenkel == 'perempuan' ? 'perempuan' : 'perempuan' }}"
                                            {{ $pemohon->jenkel == 'perempuan' ? 'checked' : '' }}> &nbsp Perempuan
                                    </label>
                                    @if ($errors->has('jenkel'))
                                        <div class="text-danger">
                                            {{ $errors->first('jenkel') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Nama Balita</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempat_lahir"
                                        value="{{ $pemohon->tempat_lahir }}">
                                    @if ($errors->has('tempat_lahir'))
                                        <div class="text-danger">
                                            {{ $errors->first('tempat_lahir') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2">Nama Balita</label>
                                <div class="col-sm-10">
                                    <input type="date" id="datePickerId" class="form-control" name="tanggal_lahir"
                                        value="{{ $pemohon->tanggal_lahir }}">
                                    @if ($errors->has('tanggal_lahir'))
                                        <div class="text-danger">
                                            {{ $errors->first('tanggal_lahir') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label class="control-label col-sm-2">Usia</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="usia" 
                                    value="{{ $pemohon->usia }}">
                                    @if ($errors->has('usia'))
                                        <div class="text-danger">
                                            {{ $errors->first('usia') }}
                                        </div>
                                    @endif
                                </div>
                            </div> -->
                           
                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-6">
                                    <a href="{{ route('pemohon') }}" class="btn btn-outline-danger">Batal</a>
                                    <button type="submit" class="btn btn-outline-primary" onclick="return confirm('Yakin anda ingin mengubah data tersebut?')">Perbaharui Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
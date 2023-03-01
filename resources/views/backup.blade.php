
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | BGC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  @if($message = Session::get('error'));
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong> {{ $message }}</strong>
</div>
  @endif

  <?= $val['id_ibu'] ?>

   <!-- <div class="form-group row">
                                <label class="control-label col-sm-2">ID Ibu</label>
                                <div class="col-sm-10">
                                    <select class="col-sm-12 form-control" name="id_ibu" id="ID-dropdown">
                                        <option value="0" aria-readonly="true">
                                            -- Select ID Ibu --</option>
                                        @foreach ($ibu as $key => $val)
                                            :
                                            <option value="" {{ $val->id_ibu == $pemohon->id_ibu ? 'selected' : '' }}>
                                                {{ $val['ID'] }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_ibu'))
                                        <div class="text-danger">
                                            {{ $errors->first('id_ibu') }}
                                        </div>
                                    @endif
                                </div>
                            </div> -->
                            <!-- <div class="form-group row">
                                <label class="control-label col-sm-2">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nameibu" disabled
                                        placeholder="Nama Ibu" value="{{ $pemohon->ibu->nama_ibu }}">
                                </div>
                            </div> -->

  <div class="login-logo">
    <a href="#"><b>Gerobak</b>Cahaya</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in untuk masuk ke beranda</p>

      <form action="{{route('postlogin')}}" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>

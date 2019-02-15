<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log In Users | OBonvivant</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><img src="/dist/img/Logo_Obonvivant.png" width="50%"></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Inicia Sesión para Ingresar a la Aplicación</p>

    <form role="form" id="ValidarUsuario" name="ValidarUsuario" method="POST" action="ValidarUsuario" accept-charset="UTF-8">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group has-feedback {{ $errors->has('InputUsuario') ? 'has-error' : ''}}">
        <input class="form-control" placeholder="Usuario" id="InputUsuario" name="InputUsuario">
        <span class="fa fa-user form-control-feedback"></span>
        {!! $errors->first('InputUsuario','<span class="help-block">:message</span>') !!}
      </div>
      <div class="form-group has-feedback {{ $errors->has('InputConstrasenia') ? 'has-error' : ''}}">
        <input type="password" class="form-control" placeholder="Constraseña" id="InputConstrasenia" name="InputConstrasenia">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        {!! $errors->first('InputConstrasenia','<span class="help-block">:message</span>') !!}
      </div>
      <div class="row">
        <div class="col-xs-7">
        </div>
        <div class="col-xs-5">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button> 
        </div>
      </div>
    </form>
  </div>
</div>

<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/plugins/iCheck/icheck.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('TituloPagina') | OBonvivant</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
  <link rel="stylesheet" href="{{asset('dist/css/Fuentes.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="{{url('/Admin')}}" class="logo">
      <span id="Logo" class="logo-mini"><img src="{{asset('dist/img/LogoBonVivantAdmin.png')}}" class="img-circle" alt="Logo" with="40px" height="40px"></span>
      <span id="Logo" class="logo-lg"><img src="{{asset('dist/img/LogoBonVivantAdmin.png')}}" class="img-circle" alt="Logo" with="40px" height="40px"><b> B</b>on Vivant</span>
    </a>

    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('dist/img/defaultUser.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">@yield('NombreUsuario') | @yield('CargoUsuario')</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{asset('dist/img/defaultUser.png')}}" class="img-circle" alt="User Image">

                <p>
                  @yield('NombreUsuario')
                  <small>@yield('CargoUsuario') desde @yield('FechaIngresoUsuario')</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{url('/LogOutUser')}}" class="btn btn-default btn-flat">Cerrar Sesión  <i class="fa fa-sign-out"></i></a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  


  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Índice</li>
        @yield('MenusHabilitados')   
    </section>
  </aside>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      @yield('MenuIcono')
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/Admin')}}"><i class="fa fa-dashboard"></i> Administración</a></li>
        <li class="active">@yield('MenuIcono')</li>
      </ol>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                @yield('CuerpoHeader')
            </div>
            <div class="box-body">
                @yield('CuerpoBody')
            </div>
            <div class="box-footer">
                @yield('CuerpoFooter')
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versión</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="https://hoyaprenda.cl/">Hoy Aprenda</a>.</strong> Todos los Derechos Reservados.
  </footer>
</div>

<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('bower_components/chart.js/Chart.js')}}"></script>
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>

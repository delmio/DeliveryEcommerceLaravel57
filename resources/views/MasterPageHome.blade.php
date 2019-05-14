<!DOCTYPE html>
<html lang="es">
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   	
        <meta name="viewport" content="initial-scale=1">
        <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
        <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('dist/css/Fuentes.css')}}">
        <title>@yield('TituloPagina') | OBonvivant</title></head>
    <body id="master_home" class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper" id="firstwrapper">
            <header class="main-header">
            <a id="LogoFront"><span id="Logo" class="logo-lg"><b> B</b>on Vivant</span></a>
                    
            <nav class="navbar navbar-static-top">
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" id="LogOutBTN" class="btn btn-default btn-flat"><i class="fa fa-instagram"></i></a>
                            <a href="#" id="LogOutBTN" class="btn btn-default btn-flat"><i class="fa fa-facebook"></i></a>
                            <a href="#" id="LogOutBTN" class="btn btn-default btn-flat"><i class="fa fa-twitter"></i></a>
                            <a href="#" id="LogOutBTN" class="btn btn-default btn-flat"><i class="fa fa-user"></i>Perfil</a> 
                            <a href="#" id="LogOutBTN" class="btn btn-default btn-flat">Cerrar Sesión  <i class="fa fa-sign-out"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
            </header>
        </div>




        <div id="main_menu">
            <div class="logo_area_master">
            <a><img src="{{asset('dist/img/Logo_Obonvivant.png')}}" alt="Logo Bonvivant" with="250px" height="250px"></a>
            </div>
            <div class="inner_main_menu_master">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-grain"></i> Productos</a></li>
                    <li><a href="#"><i class="fa fa-users"></i> Sobre Nosotros</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i> Contacto</a></li>
                </ul>
            </div>
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
        <script src="{{asset('dist/js/Reloj.js')}}"></script> 
    </body>
</html>
@extends('MasterPage')

@section('TituloPagina','Productos')

@section('NombreUsuario',\Session::get('TokenName')." ".\Session::get('TokenApellido'))

@section('CargoUsuario',\Session::get('TokenTipoUsuario'))

@section('FechaIngresoUsuario', \Session::get('TokenCreado'))

@Section('MenuIcono')
<i class="glyphicon glyphicon-grain"></i> Productos
@stop 

@Section('MenusHabilitados')
    @include('Menus')
@stop 

@Section('CuerpoHeader')
    @if ($ME == 1)
                    <script>
                        $(document).ready(function(){
                            $('#NuevoProducto2').modal('show');
                        });
                    </script>
                    @include('Modals.AgregarProductos2')
    @endif
    <h2 class="box-title">Productos</h2>
    @include('Modals.AgregarProductos')
    <a  href="#NuevoProducto" class="btn btn-app" data-toggle="modal"><i class="fa fa-plus"></i> Agregar Nuevo Producto </a>
@stop 

@Section('CuerpoBody')
    @include('Bodies.Productos')
@stop
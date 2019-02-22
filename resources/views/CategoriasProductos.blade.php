@extends('MasterPage')

@section('TituloPagina','Categorías Productos')

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
                        $('#ECM').modal('show');
                    });
                </script>
                @include('Modals.EditarCategoriasProductos')
    @endif
    <h2 class="box-title">Categorías de Productos</h2>
    @include('Modals.AgregarCategoriasProductos')
    <a  href="#NuevaCategoriaProducto" class="btn btn-app" data-toggle="modal"><i class="fa fa-plus"></i> Agregar Nueva Categoría </a>
@stop 

@Section('CuerpoBody')
    @include('Bodies.CategoriasProductos')
@stop

@Section('CuerpoFooter')
    {{$CategoriasProductos->onEachSide(1)->links()}}
@stop
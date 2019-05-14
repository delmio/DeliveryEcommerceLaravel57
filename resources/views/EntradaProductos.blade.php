@extends('MasterPage')

@section('TituloPagina','Entrada Productos')

@section('NombreUsuario',\Session::get('TokenName')." ".\Session::get('TokenApellido'))

@section('CargoUsuario',\Session::get('TokenTipoUsuario'))

@section('FechaIngresoUsuario', \Session::get('TokenCreado'))

@Section('CustomeScripts')
<link rel="stylesheet" href="{{asset('bower_components/date-picker/css/bootstrap-datepicker.css')}}">
<script src="{{asset('bower_components/date-picker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('bower_components/date-picker/js/bootstrap-datepicker.es.min.js')}}"></script>
@stop

@Section('MenuIcono')
<i class="fa fa-upload"></i> Entrada Productos
@stop 

@Section('MenusHabilitados')
    @include('Menus')
@stop 

@Section('CuerpoHeader')

    <h2 class="box-title">Entrada Productos</h2>  
    
    <a  href="#StockProducto" id="BtnProducto" class="btn btn-app" data-toggle="modal"><i class="fa fa-plus"></i> Ingresar Stock Producto </a>


@stop 

@Section('CuerpoBody')
    @include('Bodies.EntradaProductos')
@stop

@Section('CuerpoFooter')
    @include('Modals.AgregarStockProducto')
    {{$StockProductos->onEachSide(1)->links()}}
@stop


@extends('MasterPage')

@section('TituloPagina','Principal')

@section('NombreUsuario',\Session::get('TokenName')." ".\Session::get('TokenApellido'))

@section('CargoUsuario',\Session::get('TokenTipoUsuario'))

@section('FechaIngresoUsuario', \Session::get('TokenCreado'))

@Section('MenuIcono')
<i class="fa fa-folder-o"></i> Tablero
@stop 

@Section('MenusHabilitados')
    @include('Menus.Admin')
@stop 




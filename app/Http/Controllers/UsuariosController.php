<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoUsuarios;
use App\Usuarios;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    public function ValidarUsuario(Request $request)
    {
        //Establecer  reglas de validacion para los campos
        $regla = [
            'InputUsuario' => 'required',
            'InputConstrasenia' => 'required',
        ];
        //Establecer mensaje en caso fallar validacion
        $mensaje = [
            'required' => 'Este Campo Debe ser Ingresado.'
        ];
        //Validar Campos
        $this->validate($request, $regla, $mensaje);
        //Establecer variables con los campo que ingreso usuario
        $credencial = $request['InputUsuario'];
        $contrasenia = $request['InputConstrasenia'];
        //Crear la consulta a la base de datos y ejecutarla
        $query = DB::table('usuarios')
        ->join('tipousuarios', 'tipousuarios.ID', '=', 'usuarios.TipoUsuario')
        ->select('usuarios.Nombre','usuarios.Apellido','usuarios.StatusUser','tipousuarios.NombreTipoUsuario','usuarios.CreatedAT')
        ->where('usuarios.Credencial','=',$credencial)
        ->where('usuarios.Contrasenia','=',$contrasenia)   
        ->get();
        //Si devuelve una respuesta positiva es decir que existe dicho campo se establecen variables de tipo sesion con los mismos
        if(!$query->isEmpty())
        {
            \Session::put('TokenLoggin','trues');
            \Session::put('TokenName',$query[0]->Nombre);
            \Session::put('TokenApellido',$query[0]->Apellido);
            \Session::put('TokenStatus',$query[0]->StatusUser);
            \Session::put('TokenTipoUsuario',$query[0]->NombreTipoUsuario);
            \Session::put('TokenCreado',$query[0]->CreatedAT);
            //Si el Status del usuario es 1 es decir "Habilitado" se redirecciona a dashboard
            if(\Session::get('TokenStatus') == '1'){
                
                return view('Admin');
            }
            else //Si no esta habilitado para logear se redirecciona de regreso al login y se muestra el mensaje
            {
                return back()->withErrors(['InputUsuario' => 'Usuario Deshabilitado para Entrar al Sistema']);
            }
        }
        else{ //Si el usuario no existe en la base de datos se redirecciona de regreso al login y se muestra el mensaje
            return back()->withErrors(['InputUsuario' => 'Usuario Inexistente en la Base de Datos']);
        }      

    }

    public function LogOut(){ //Se vacian las variables de tipo sesion y se redirecciona a la vista LoginUser
        
        \Session::put('TokenLoggin','');
        \Session::put('TokenName','');
        \Session::put('TokenApellido','');
        \Session::put('TokenStatus','');
        \Session::put('TokenTipoUsuario','');
        \Session::put('TokenCreado','');
        return view('LoginUser');
    }
}

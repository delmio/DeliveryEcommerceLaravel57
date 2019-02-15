<?php

namespace App\Http\Controllers;
use App\CategoriasProductos;

use Illuminate\Http\Request;

class CategoriasProductosController extends Controller
{
    public function Add(Request $request){
        $CategoriasProductos = new CategoriasProductos;

        $now = new \DateTime();
        $now->format('Y-m-d H:i:s');
        
        $CategoriasProductos->NombreCategoriasProductos = $request['NombreCategoriaProducto'];
        $CategoriasProductos->Status = $request['StatusCategoriaProducto'];
        $CategoriasProductos->CreatedAT = $now;
        $CategoriasProductos->UpdatedAT = "-";


        $CategoriasProductos->save();

        return redirect()->action('CategoriasProductosController@List');

    }

    public function List(){
        $CategoriasProductos = CategoriasProductos::orderBy('Status','desc')->paginate(10);
        $ME = 0; //Status Modal Editar

        return view('CategoriasProductos',['CategoriasProductos'=>$CategoriasProductos,'ME'=>$ME]);
    }

    public function GetEditedProduct($id){
        $Categoria = CategoriasProductos::where('ID',$id)->first();

        $CategoriasProductos = CategoriasProductos::paginate(10);
        $ME = 1; // Status Modal Editar
        return view('CategoriasProductos',['CategoriasProductos'=>$CategoriasProductos,'ME'=>$ME,'Categoria'=>$Categoria]);
    }

    public function Editar(Request $request){

        $idC = $request['CategoriaID'];
        $Categoria = CategoriasProductos::where('ID',$idC)->first();

        $now = new \DateTime();
        $now->format('Y-m-d H:i:s');

        $Categoria->ID = $idC;
        $Categoria->NombreCategoriasProductos = $request['NombreCategoriaProducto'];
        $Categoria->Status = $request['StatusCategoriaProducto'];
        $Categoria->UpdatedAT = $now;
        $Categoria->save();
    
        return redirect()->action('CategoriasProductosController@List');
    }
}

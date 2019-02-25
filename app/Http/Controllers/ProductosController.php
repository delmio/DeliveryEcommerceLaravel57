<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\CategoriasProductos;

class ProductosController extends Controller
{
    public function AgregarProcutoStep1(Request $request){
        $CategoriasProductos = CategoriasProductos::where('Status','=','1')->get();
        $ProductosCalculo1 = new Productos;
        $ProductosCalculo1->NombreProducto = $request['NombreProducto'];
        $ProductosCalculo1->CantidadConjunto = $request['CantidadProducto'];
        $ProductosCalculo1->PrecioUnitarioSinIva = $request['ValorUnitarioSinIvaProducto'];
        $ProductosCalculo1->CategoriaProducto = $request['CategoriaProducto'];
        $ProductosCalculo1->Status = $request['StatusProducto'];
        $ProductosCalculo1->MargenGanancia = $request['MargenDeGanancia'];
        $ProductosCalculo1->Ajuste = $request['AjusteProducto'];
        $ProductosCalculo1->PrecioUnitarioConIva = ($ProductosCalculo1->PrecioUnitarioSinIva + ($ProductosCalculo1->PrecioUnitarioSinIva * 0.19));
        $ProductosCalculo1->PrecioConjuntoSinIva = ($ProductosCalculo1->PrecioUnitarioSinIva * $ProductosCalculo1->CantidadConjunto); 
        $ProductosCalculo1->PrecioConjuntoConIva = ($ProductosCalculo1->PrecioUnitarioConIva * $ProductosCalculo1->CantidadConjunto);
        $ProductosCalculo1->Utilidad = ($ProductosCalculo1->PrecioUnitarioSinIva*($ProductosCalculo1->MargenGanancia/100));
        $ProductosCalculo1->IvaUnitario = ($ProductosCalculo1->PrecioUnitarioSinIva * 0.19);
        $ProductosCalculo1->IvaConjunto = ($ProductosCalculo1->PrecioConjuntoSinIva * 0.19);
        $ProductosCalculo1->PrecioFinalSinIva = ($ProductosCalculo1->PrecioUnitarioSinIva + $ProductosCalculo1->Utilidad);
        $ProductosCalculo1->PrecioFinalConIva = ($ProductosCalculo1->PrecioFinalSinIva + $ProductosCalculo1->IvaUnitario);
        $ProductosCalculo1->TotalSinIva = ($ProductosCalculo1->PrecioFinalSinIva + $ProductosCalculo1->Ajuste);
        $ProductosCalculo1->TotalConIva = ($ProductosCalculo1->PrecioFinalConIva + $ProductosCalculo1->Ajuste);
        $ME = 1;
        $CategoriasSeleccionada = CategoriasProductos::select('NombreCategoriasProductos')->where('ID','=',$ProductosCalculo1->CategoriaProducto)->first();
        return view('Productos',['CategoriasProductos'=>$CategoriasProductos,'ME'=>$ME,'ProductosCalculo1'=>$ProductosCalculo1,'CategoriasSeleccionada'=>$CategoriasSeleccionada]);
        
    }
    public function List(){
        $CategoriasProductos = CategoriasProductos::where('Status','=','1')->get();
        $ME = 0;
        return view('Productos',['CategoriasProductos'=>$CategoriasProductos,'ME'=>$ME]);
    }
}

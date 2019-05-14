<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\CategoriasProductos;
use App\StockProductos;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function AgregarProducto(Request $request){
       
        $regla = [  // Se Inicializa las validaciones
            'CategoriaProducto' => 'required|numeric',
            'NombreProducto' => 'required',
            'CantidadProducto' => 'required|numeric',
            'PrecioProducto' => 'required|numeric',
            'StatusProducto' => 'required|numeric',
            'ImagenProducto' => 'mimes:jpeg,jpg,png'
        ];

        $mensaje = [ // se Inicializa los mensajes
            'required' => 'Este Campo es Necesario.',
            'mimes' => 'El Archivo Seleccionado Debe ser una Imagen.',
            'numeric' => 'Este Campo Debe ser Numerico.'
        ];

        $now = new \DateTime(); // se obtiene la fecha y hora actual
        $now->format('Y-m-d H:i:s'); // se da formato a la fecha actual


        if ($request->hasFile('ImagenProducto')){    // Si el request tiene Archivo 
            
            $this->validate($request, $regla, $mensaje); // Validar Campos

            $file = $request->file('ImagenProducto'); //Obtiene la imagen cargada
            $Productos = new Productos;  // inicializa objeto producto para acceder a base de datos
            $Productos->ImagenUrlProducto = $file->getClientOriginalName(); // se obtiene el nombre del archivo
            \Storage::disk('DiscoUrlImagenes')->put($Productos->ImagenUrlProducto,  \File::get($file)); // se guarda el archivo en el disco
            $Productos->CategoriaProducto = $request['CategoriaProducto'];  // se asigna al campo CategoriaProducto en la bd el valor del request CategoriaProducto
            $Productos->NombreProducto = $request['NombreProducto']; // se asigna al campo NombreProducto en la bd el valor del request NombreProducto
            $Productos->CantidadProducto = $request['CantidadProducto']; // se asigna al campo CantidadProducto en la bd el valor del request CantidadProducto
            $Productos->PrecioProducto = $request['PrecioProducto']; // se asigna al campo PrecioProducto en la bd el valor del request PrecioProducto
            $Productos->Status = $request['StatusProducto'];  // se asigna al campo CategoriaProducto en la bd el valor del request CategoriaProducto
            $Productos->CreatedAT = $now; // Fecha en la que se creo
            $Productos->UpdatedAT = "-"; // Fecha en la que modifico
            $Productos->save(); // Guardar en BD
        }
        else
        {
            return back()->withErrors(['ImagenProducto' => 'Debe Seleccionar Una Imagen']); // si no tiene, devuelve tirando error
        }

        return redirect()->action('ProductosController@List');
        
    }
    public function List(){
        $CategoriasProductos = CategoriasProductos::where('Status','=','1')->get();

        $Productos = DB::table('categoriasproductos')
        ->join('producto', 'producto.CategoriaProducto', '=', 'categoriasproductos.ID')
        ->select('categoriasproductos.NombreCategoriasProductos as Categoria',
                 'producto.ID as ID',
                 'producto.NombreProducto as Nombre',
                 'producto.ImagenUrlProducto as URL',
                 'producto.CantidadProducto as Cantidad',
                 'producto.PrecioProducto as Precio',
                 'producto.Status as Status',
                 'producto.CreatedAT as Creado',
                 'producto.UpdatedAT as Modificado')
        ->paginate(10);

        return view('Productos',['CategoriasProductos'=>$CategoriasProductos,'Productos'=>$Productos]);
        
    }

    public function ListStock(){
        $Productos = Productos::select('ID','NombreProducto')->get();

        $StockProductos = DB::table('producto')
        ->join('stockproductos', 'stockproductos.CodigoProducto', '=', 'producto.ID')
        ->select('stockproductos.CodigoBarraProducto as Barra',
                 'producto.NombreProducto as Nombre',
                 'stockproductos.Cantidad as Stock',
                 'stockproductos.Vencimiento as Vencimiento',
                 'stockproductos.CreatedAT as Creado',
                 'stockproductos.UpdatedAT as Modificado')
        ->paginate(10);


        return view('EntradaProductos',['Productos'=>$Productos,'StockProductos'=>$StockProductos]);
    }

    public function AgregarStock(Request $request){

        $now = new \DateTime(); 
        $now->format('Y-m-d H:i:s'); 

        $StockProductos = new StockProductos;
        $StockProductos->CodigoBarraProducto = $request['BarraProducto'];
        $StockProductos->CodigoProducto = $request['Producto'];
        $StockProductos->Cantidad = $request['Cantidad'];
        $StockProductos->Vencimiento = $request['fechaVencimiento'];
        $StockProductos->CreatedAT = $now;
        $StockProductos->UpdatedAT = "-";
        $StockProductos->save();

        return redirect()->action('ProductosController@ListStock');
    }
}

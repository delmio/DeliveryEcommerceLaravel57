<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','CategoriaProducto','NombreProducto','ImagenUrl','PrecioUnitarioSinIva','PrecioUnitarioConIva','MargenGanancia','Utilidad','PrecioConjuntoSinIva',
    'PrecioConjuntoConIva','Ajuste','IvaUnitario','IvaConjunto','PrecioFinalSinIva','PrecioFinalConIva','CantidadConjunto','TotalSinIva','TotalConIva','Stock','Status','CreatedAT','UpdatedAT'];
    public $timestamps = false;
}

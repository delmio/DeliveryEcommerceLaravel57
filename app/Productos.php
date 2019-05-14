<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','CategoriaProducto','NombreProducto','ImagenUrlProducto','CantidadProducto','PrecioProducto','Status','CreatedAT','UpdatedAT'];
    public $timestamps = false;
}

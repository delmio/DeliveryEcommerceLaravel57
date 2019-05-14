<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockProductos extends Model
{
    protected $table = 'stockProductos';
    protected $primaryKey = 'CodigoBarraProducto';
    protected $fillable = ['CodigoBarraProducto','CodigoProducto','Cantidad','Vencimiento','CreatedAT','UpdatedAT'];
    public $timestamps = false;
    public $incrementing = false;
}

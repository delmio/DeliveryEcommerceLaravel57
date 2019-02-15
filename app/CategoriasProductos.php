<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasProductos extends Model
{
    protected $table = 'categoriasproductos';
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','NombreCategoriasProductos','Status','CreatedAT','UpdatedAT'];
    public $timestamps = false;
}

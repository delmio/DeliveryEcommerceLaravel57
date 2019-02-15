<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $table = 'categoriasproductos';
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','Credencial','Contrasenia','TipoUsuario','Nombre','Apellido','Status','CreatedAT','UpdatedAT'];
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipousuarios extends Model
{
    protected $table = 'tipousuarios';
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','NombreTipoUsuario','Status','CreatedAT','UpdatedAT'];
    public $timestamps = false;
}

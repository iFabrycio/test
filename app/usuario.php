<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
   protected $table = 'usuario';
    public $timestamps = false;
    

    protected $fillable = array ('Idusuario, nome, email, senha');
    protected $primaryKey = 'Idusuario';
}

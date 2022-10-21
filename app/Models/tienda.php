<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tienda extends Model
{
 
   use HasFactory;
   protected $table ='tienda';
   protected $primaryKey = 'id_tienda';
   protected $fillable = [
      
           'clave' ,
           'nombre',
           'fecha_crea' ,
           'fecha_mod ' ,
           'foto ' ,
           'created_at',
           'updated_at'
           
    ] ;
}

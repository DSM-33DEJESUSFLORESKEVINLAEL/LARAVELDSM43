<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $table='productos';
    protected $primaryKey = ' id_productos ' ;
    protected $fillable = [
       
            'codigo',
            'nombre',
            'cantidad',
            'costo',
            'id_tipo',
            'id_tienda',
            'activo',
            'crea',
            'mod',
            'foto',
            'created_at',
            'updated_at',
            
     ] ;
    }


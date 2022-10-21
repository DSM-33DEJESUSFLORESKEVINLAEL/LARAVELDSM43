<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos extends Model
{
    use HasFactory;
    protected $table = 'tipos';
    protected $primaryKey = 'id_tipos';
    protected $fillable = [
            'nombre',
            'detalle',
            'activo',
            'fecha_crea',
            'fecha_mod',
            'created_at',
            'updated_at',
     ] ;
}

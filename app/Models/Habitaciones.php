<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Habitaciones extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'habitaciones';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion', 
        'cantidad', 
        'precio', 
        'codigo', 
        'es_activo', 
        'host_id', 
        'tipo_habitacion_id'
    ];

}

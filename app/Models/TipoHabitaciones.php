<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoHabitaciones extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'habitaciones';
    protected $fillable = [
        'id',
        'nombre',
        'codigo', 
        'descripcion', 
        'es_activo'
    ];

    public function habitaciones(){
        return $this->hasMany('\App\Habitaciones', 'tipo_habitacion_id', 'id');
    }
}

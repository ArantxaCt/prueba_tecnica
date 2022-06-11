<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Host extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'habitaciones';
    protected $fillable = [
        'id',
        'nombre',
        'email', 
        'telefono', 
        'rfc', 
        'razon_social', 
        'es_activo'
    ];
    
    public function habitaciones(){
        return $this->hasMany('\App\Habitaciones', 'host_id', 'id');
    }
}

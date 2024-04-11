<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'dispositivo_nombre',
        'dispositivo_estado',
        'dispositivo_habitacion_id' , //hotel al que pertenece
        'dispositivo_descripcion',
        'dispositivo_valor',
        'dispositivo_lectura',
        'user_created',
        'id_janos',
        'id_home_assistant'
    ];
    

    public function habitacion()
{ 
    return $this->belongsTo(Habitacion::class, 'dispositivo_habitacion_id'); //devuelvela siguiente relacion: un dispositivo pertenece a una habitacion que se encuentra en dispositivo-habitacion-id
}
    
}


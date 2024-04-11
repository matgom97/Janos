<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $table = 'habitaciones';
    protected $primaryKey = 'habitacion_id';

    protected $fillable = [
        'habitacion_nombre',
        'habitacion_estado',
        'habitacion_piso_id' , //hotel al que pertenece
        'habitacion_descripcion',
        'habitacion_capacidad',
       /*  'habitacion_cantidad_personas', */
        'user_created'
    ];

    public function piso()
        { 
            return $this->belongsTo(Piso::class, 'habitacion_piso_id'); //devuelve una relacion +una habitacion pertenece a un piso que se encuentra el id en habitacion-piso-id
        }


    public function dispositivos()
        {
            return $this->hasMany(Dispositivo::class, 'dispositivo_habitacion_id');
        }

}

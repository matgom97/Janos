<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    use HasFactory;
    protected $table = 'pisos';
    protected $primaryKey = 'piso_id';


    protected $fillable = [
        'piso_nombre',
        'piso_estado',
        'piso_hotel_id' , //hotel al que pertenece
        'piso_descripcion',
        'user_created'
    ];
    

    public function Hotel()
        { 
            return $this->belongsTo(Hotel::class, 'piso_hotel_id'); //devuelvela siguiente relacion: un piso pertenece a un hotel que se encuentra el id en piso-hotel-id
        }

    public function habitaciones()
        {
            return $this->hasMany(Habitacion::class, 'habitacion_piso_id');
        }


}

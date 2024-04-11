<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hoteles';
    protected $primaryKey = 'id';


    protected $fillable = [
     
        'hotel_nombre',
        'hotel_direccion',
        'hotel_ciudad',
        'hotel_email',
        'hotel_categoria',
        'hotel_descripcion',
        'hotel_estado',
        'user_created'
    ];

    public function pisos()
{
    return $this->hasMany(Piso::class, 'piso_hotel_id');
}

public function dispositivos()
{
    return $this->hasMany(Dispositivo::class);
}

    
}

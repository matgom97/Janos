<?php

namespace App\Http\Controllers\Smart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Dispositivo;
use App\Models\Hotel;
use App\Models\Habitacion;
use Illuminate\Support\Facades\Auth;


class DispositivoController extends Controller
{
    //
    public function storeview() {
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
        $hotelId = Auth::user()->user_hotel;
        $hotel = Hotel::with('pisos.habitaciones')->findOrFail($hotelId);
        $pisos = $hotel->pisos;
    
        // Obtener todas las habitaciones del hotel y convertirlas en una colección de modelos
        $habitaciones = collect();
        foreach ($pisos as $piso) {
            $habitaciones = $habitaciones->concat($piso->habitaciones);
        }
    
        return view('dashboard.admin.CreateDispositivos', compact('pisos', 'nombre', 'habitaciones'));
    }

    public function cargarHabitaciones($pisoId)
{
    $habitaciones = Habitacion::where('habitacion_piso_id', $pisoId)->get();
    
    return response()->json($habitaciones);
}


    public function showDispositivo()
    {
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
        $hotelId = Auth::user()->user_hotel;
    
        $hotel = Hotel::findOrFail($hotelId);
    
        if (!$hotel) {
            // Manejo de error si no se encuentra el hotel
            return abort(404);
        }
    
        $dispositivos = [];
    
        foreach ($hotel->pisos as $piso) {
            foreach ($piso->habitaciones as $habitacion) {
                foreach ($habitacion->dispositivos as $dispositivo) {
                    $dispositivos[] = $dispositivo;
                }
            }
        }
    
        if (empty($dispositivos)) {
            $mensaje = "No hay dispositivos disponibles en este hotel en este momento.";
            return view('dashboard.admin.ListaDispositivos', compact('nombre', 'mensaje', 'dispositivos'));
        }
    
        return view('dashboard.admin.ListaDispositivos', compact('nombre', 'dispositivos'));
    }
    
    public function store (Request $request){
        try {
            $dispositivo = new Dispositivo;

            $dispositivo->dispositivo_nombre = $request->dispositivo_nombre;
            $dispositivo->dispositivo_habitacion_id = $request->dispositivo_habitacion_id;

            $dispositivo->dispositivo_descripcion = $request->dispositivo_descripcion;
            $dispositivo->id_janos = $request->id_janos;
            $dispositivo->id_home_assistant = $request->id_home_assistant;


            $dispositivo->dispositivo_estado = '1';
    
            $dispositivo->modified_by = Auth::user()->id;
            if ($dispositivo->save()) {
                Session::flash('success', 'Dispositivo creada exitosamente');
            } else {
                Session::flash('error', 'El Dispositivo no se ha podido crear con éxito, por favor intenta nuevamente');
            }
        } catch (\Exception $e) {
            Session::flash('error', 'Error al crear El Dispositivo: ' . $e->getMessage());
        }
        return redirect()->back();
    }
}

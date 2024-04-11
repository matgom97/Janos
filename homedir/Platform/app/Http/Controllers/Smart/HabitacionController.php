<?php

namespace App\Http\Controllers\Smart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Hotel; 
use App\Models\Habitacion; 

class HabitacionController extends Controller
{
    //
    public function storeview() {

        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
        $hotelId = Auth::User()->user_hotel;
        $hotel = Hotel::with('pisos.habitaciones')->findOrFail($hotelId);
        $pisos = $hotel->pisos;

        return view ('dashboard.admin.CreateHabitaciones', compact('pisos','nombre'));
    }

    public function showhabitacion () 
    {
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
        $hotelId = Auth::User()->user_hotel;
        $hotel = Hotel::with('pisos.habitaciones')->findOrFail($hotelId);
        $pisos = $hotel->pisos;
        $todasLasHabitaciones = [];
    
        foreach ($pisos as $piso) {
            $habitaciones = $piso->habitaciones;
            $todasLasHabitaciones = array_merge($todasLasHabitaciones, $habitaciones->toArray());
        }
        if (empty($todasLasHabitaciones)) {
            $mensaje = "No hay habitaciones disponibles en este momento.";
            return view('dashboard.admin.ListaHabitaciones', compact('nombre', 'mensaje', 'todasLasHabitaciones'));
        }
        return view('dashboard.admin.ListaHabitaciones', compact('nombre', 'todasLasHabitaciones', 'pisos'));
    }
    
    public function store (Request $request){
        try {
            $habitacion = new Habitacion;
            $habitacion->habitacion_nombre = $request->habitacion_nombre;
            $habitacion->habitacion_piso_id = $request->habitacion_piso_id;
            $habitacion->habitacion_descripcion = $request->habitacion_descripcion;
            $habitacion->habitacion_ocupacion = $request->habitacion_ocupacion;
            $habitacion->habitacion_capacidad = $request->habitacion_capacidad;
            $habitacion->habitacion_estado = '1';
                
            $habitacion->modified_by = Auth::user()->id;
            if ($habitacion->save()) {
                Session::flash('success', 'Habitacion creada exitosamente');
            } else {
                Session::flash('error', 'La habitacion no se ha podido crear con éxito, por favor intenta nuevamente');
            }
        } catch (\Exception $e) {
            Session::flash('error', 'Error al crear la habitacion: ' . $e->getMessage());
        }
        return redirect()->back();
    }



    public function destroy(Habitacion $habitacion)
    {
        $habitacion->delete();
        Session::flash('success', 'Habitacion eliminada exitosamente');
        return redirect()->back();
    }

}

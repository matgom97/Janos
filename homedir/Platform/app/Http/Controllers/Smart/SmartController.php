<?php

namespace App\Http\Controllers\Smart;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Dispositivo;
use App\Models\Hotel;
use App\Models\Habitacion;

class SmartController extends Controller
{
    //
    public function Smart(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.index', compact('nombre'));
    }

    public function Visualizacion(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.visualizacion', compact('nombre'));
    }

    public function Habitacion(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.habitacion', compact('nombre'));
    }

    
    public function Habitacion2(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.habitacion2', compact('nombre'));
    }


    public function Consumos(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.consumos', compact('nombre'));
    }

    public function Consumos_aire(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.consumos-aire', compact('nombre'));
    }

    public function Consumos_tv(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
        return view('dashboard.smart.consumos-tv', compact('nombre'));
    }


    public function Consumos_termostato(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
        $hotelId = Auth::user()->user_hotel; // estoy obteniendo el id del hotel 
        // Crear el request para obtener los dispositivos de manera dinamica

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


        return view('dashboard.smart.consumos-termostato', compact('nombre',  'dispositivos'));
    }
    public function Consumos_iluminacion(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
        $data1 = null; // Obtén los datos de donde sea que los tengas
        $data2 = null; // Obtén los datos de donde sea que los tengas
        $data3 = null; // Obtén los datos de donde sea que los tengas

        return view('dashboard.smart.consumos-iluminacion', compact('nombre', 'data1','data2','data3'));
    }

    public function Costos(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.costos', compact('nombre'));
    }


    public function Costosview(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.costos-view', compact('nombre'));
    }
    public function Mantenimiento(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.mantenimientos', compact('nombre'));
    }

    public function Reportes(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.reportes', compact('nombre'));
    }

    public function Notificaciones(){
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.smart.notificaciones', compact('nombre'));
    }
}

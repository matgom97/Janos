<?php

namespace App\Http\Controllers\Smart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Hotel; 


class HotelController extends Controller
{
    //
    public function storeview() {

        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view ('dashboard.admin.CreateHoteles', compact('nombre'));
    }

    public function showhotel() {

        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
        $hoteles = Hotel::all(); // Esto recuperará todos los hoteles de la base de datos
    
        if ($hoteles->isEmpty()) {
            // No hay hoteles, puedes mostrar un mensaje de que no hay hoteles disponibles.
            $mensaje = "No hay hoteles disponibles en este momento.";
            return view('dashboard.admin.ListaHoteles', compact('nombre', 'mensaje'));
        }

        return view('dashboard.admin.ListaHoteles', compact('nombre', 'hoteles'));
    }
     
    public function store (Request $request){
        try {
            $hotel = new Hotel;
            if ($request->hasFile('hotel_imagen')) {
                $file = $request->file('hotel_imagen');
                $nombreImagen = time().'.'.$file->getClientOriginalExtension();
                $destinoPath = public_path('/imagenes');
                $file->move($destinoPath, $nombreImagen);
                $hotel->hotel_imagen = $nombreImagen;
            }
            $hotel->hotel_nombre = $request->hotel_nombre;
            $hotel->hotel_direccion = $request->hotel_direccion;
            $hotel->hotel_ciudad = $request->hotel_ciudad;
            $hotel->hotel_telefono = $request->hotel_telefono;
            $hotel->hotel_descripcion = $request->hotel_descripcion;
            $hotel->hotel_categoria = $request->hotel_categoria;
            $hotel->hotel_estado = '1';
    
            $hotel->modified_by = Auth::user()->id;
            if ($hotel->save()) {
                Session::flash('success', 'Hotel creado exitosamente');
            } else {
                Session::flash('error', 'El Hotel no se ha podido crear con éxito, por favor intenta nuevamente');
            }
        } catch (\Exception $e) {
            Session::flash('error', 'Error al crear el hotel: ' . $e->getMessage());
        }
    
        return redirect()->back();
    }
    
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        Session::flash('success', 'Hotel eliminado exitosamente');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Smart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Hotel; 
use App\Models\Piso; 

class PisoController extends Controller
{
    //
    public function storeview() {

        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view ('dashboard.admin.CreatePisos', compact('nombre'));
    }

    public function showpiso() {
        $nombrevista = 'Lista de pisos';
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
        $usuarioAutenticado = Auth::user();

        $pisos = Piso::where('piso_hotel_id', $usuarioAutenticado->user_hotel)->get();

    
        return view('dashboard.admin.ListaPisos', compact('nombre', 'pisos', 'nombrevista'));
    }

    public function store (Request $request){
        try {
            $piso = new Piso;
    
            $piso->piso_nombre = $request->piso_nombre;
            $piso->piso_descripcion = $request->piso_descripcion;
            $piso->piso_estado = '1';
            $piso->piso_hotel_id = $request->piso_hotel_id;
    
            $piso->modified_by = Auth::user()->id;
    
            if ($piso->save()) {
                Session::flash('success', 'Piso creado exitosamente');
            } else {
                Session::flash('error', 'El Piso no se ha podido crear con éxito, por favor intenta nuevamente');
            }
        } catch (\Exception $e) {
            Session::flash('error', 'Error al crear el piso: ' . $e->getMessage());
        }
        return redirect()->back();
    }
    
    public function destroy(Piso $piso)
    {
        $piso->delete();
        Session::flash('success', 'Piso eliminado exitosamente');
        return redirect()->back();
    }
}


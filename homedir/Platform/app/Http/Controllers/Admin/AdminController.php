<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use App\Models\Hotel; 
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function show () {
        $hotelDelUsuario = Auth::user()->user_hotel;
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
       // Recuperar la información del hotel
       $hotel = Hotel::find($hotelDelUsuario);
       if ($hotel) {
           return view('dashboard.layouts.admin', compact('hotel', 'nombre'));
       }
       // Manejo de casos en los que el usuario no está asociado a un hotel
       return redirect()->route('login')->with('error', 'Debes iniciar sesión y estar asociado a un hotel para acceder a esta página.');
    }

    public function showuser () {
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
    $usuarioAutenticado = Auth::user();
    $hotelu = Hotel::find($usuarioAutenticado->user_hotel);
    $usuarioHotel = User::where('user_hotel', $usuarioAutenticado->user_hotel)
        ->get();
    return view('dashboard.admin.ListaUsuarios', compact('nombre', 'usuarioHotel', 'hotelu'));
}

public function storeview () {
    $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
    return view('dashboard.admin.CreateUsuarios', compact('nombre'));
}

public function store (Request $request){
    try {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->numero_identificacion = $request->numero_identificacion;
        $user->tipo_identificacion = $request->tipo_identificacion;
        $user->user_role = $request->user_role;
        $user->user_hotel = Auth::user()->user_hotel;

        if ($request->password !== $request->confirm_password) {
            throw new \Exception('Las contraseñas no coinciden.');
        }
        $user->password = bcrypt($request->password);

        $user->user_created = Auth::user()->id;

        if ($user->save()) {
            Session::flash('success', 'Usuario creado exitosamente');
        } else {
            Session::flash('error', 'El usuario no se ha podido crear con éxito, por favor intenta nuevamente');
        }
    } catch (\Exception $e) {
        Session::flash('error', 'Error al crear el usuario: ' . $e->getMessage());
    }

    return redirect()->back();
}

public function destroy(User $user)
{
    $user->delete();
    Session::flash('success', 'Usuario eliminado exitosamente');
    return redirect()->back();
}


}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Hotel; 
use App\Models\User; 


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";


        return view('dashboard.perfil', [
            'user' => $request->user(),
        ], compact('nombre'));
    }


   
        public function inicio()
        {
            
            // Obtener el hotel al que pertenece el usuario
            $hotelDelUsuario = Auth::user()->user_hotel;
             $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";
             $usuarioAutenticado = Auth::user();
        
            // Recuperar la información del hotel
            $hotel = Hotel::find($hotelDelUsuario);
            $usuarioHotel = User::where('user_hotel', $usuarioAutenticado->user_hotel)
            ->get();

            if ($hotel) {
                return view('dashboard.layouts.main', compact('hotel', 'nombre',  'usuarioHotel'));
            }
        
            // Manejo de casos en los que el usuario no está asociado a un hotel
            return redirect()->route('login')->with('error', 'Debes iniciar sesión y estar asociado a un hotel para acceder a esta página.');
        }
        
        


    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Hotel; // Asegúrate de importar el modelo Hotel

class HotelesComposer
{
    public function compose(View $view)
    {
        // Obtén el nombre de la vista actual
        $viewName = $view->getName();

        // Verifica si la vista actual no es welcome ni login
        if (!in_array($viewName, ['welcome', 'login'])) {
            // Obtén el usuario autenticado
            $user = Auth::user();

            // Verifica si el usuario está autenticado y tiene un hotel asociado
            if ($user && $user->user_hotel) {
                // Obtén la información del hotel del usuario
                $hotel = Hotel::find($user->user_hotel);

                // Comparte la información del hotel con la vista
                $view->with('hotel', $hotel);
            }
        }
    }
}

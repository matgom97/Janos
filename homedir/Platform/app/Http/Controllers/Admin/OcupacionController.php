<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use App\Models\Hotel; 
use Illuminate\Support\Facades\Session;

class OcupacionController extends Controller
{
    //
    public function showocupacion()
    {
        $nombre = Auth::check() ? Auth::user()->name : "Usuario no autenticado";

        return view('dashboard.admin.ListaOcupacion', compact('nombre'));
    }
}

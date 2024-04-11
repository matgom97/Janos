<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OcupacionController;
use App\Http\Controllers\Smart\SmartController;
use App\Http\Controllers\Smart\HotelController;
use App\Http\Controllers\Smart\PisoController;
use App\Http\Controllers\Smart\HabitacionController;
use App\Http\Controllers\Smart\DispositivoController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('welcome');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/inicio', function () {
        return view('dashboard.layouts.inicio');
    });
    Route::get('/admin', function () {
        return view('dashboard.admin');
    });
    //web routes
    Route::get('/inicio', [ProfileController::class, 'inicio'])->name('inicio');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //user routes
    Route::get('/admin', [AdminController::class, 'show'])->name('admin.index');
    Route::get('/listausuarios', [AdminController::class, 'showuser'])->name('admin.listausuarios');
    Route::get('/crearusuarios', [AdminController::class, 'storeview'])->name('admin.crearusuarios');
    Route::post('/crearusuarios', [AdminController::class, 'store'])->name('usuarios.store');
    Route::delete('/usuarios/{user}', [AdminController::class, 'destroy'])->name('usuarios.destroy');

    //hotel routes
    Route::get('/listahoteles', [HotelController::class, 'showhotel'])->name('admin.listahoteles');
    Route::get('/crearhoteles', [HotelController::class, 'storeview'])->name('admin.crearhoteles');
    Route::post('/crearhoteles', [HotelController::class, 'store'])->name('hoteles.store');
    Route::delete('/hoteles/{hotel}', [HotelController::class, 'destroy'])->name('hoteles.destroy');

    //piso routes
    Route::get('/listapisos', [PisoController::class, 'showpiso'])->name('admin.listapisos');
    Route::get('/crearpisos', [PisoController::class, 'storeview'])->name('admin.crearpisos');
    Route::post('/crearpisos', [PisoController::class, 'store'])->name('pisos.store');
    Route::delete('/pisos/{piso}', [PisoController::class, 'destroy'])->name('pisos.destroy');

    //habitaciones routes
    Route::get('/listahabitaciones', [HabitacionController::class, 'showhabitacion'])->name('admin.listahabitaciones');
    Route::get('/crearhabitaciones', [HabitacionController::class, 'storeview'])->name('admin.crearhabitaciones');
    Route::post('/crearhabitaciones', [HabitacionController::class, 'store'])->name('habitaciones.store');
    Route::delete('/habitaciones/{habitacion}', [HabitacionController::class, 'destroy'])->name('habitaciones.destroy');

    //dispositivos routes
    Route::get('/listadispositivos', [DispositivoController::class, 'showdispositivo'])->name('admin.listadispositivos');
    Route::get('/creardispositivos', [DispositivoController::class, 'storeview'])->name('admin.creardispositivos');
    Route::post('/creardispositivos', [DispositivoController::class, 'store'])->name('dispositivos.store');
    Route::delete('/dispositivos/{dispositivo}', [DispositivoController::class, 'destroy'])->name('dispositivos.destroy');
    Route::get('/cargar-habitaciones/{pisoId}', [DispositivoController::class, 'cargarHabitaciones'])->name('dispositivos.cargarHabitaciones');

    //ocupacion routes
    Route::get('/ocupacion', [OcupacionController::class, 'showocupacion'])->name('admin.listaocupaicon');

    //Smart Routes
    Route::get('/smart', [SmartController::class, 'smart'])->name('smart');
    Route::get('/visualizacion', [SmartController::class, 'Visualizacion'])->name('Visualizacion');
    Route::get('/habitacion', [SmartController::class, 'habitacion'])->name('habitacion');
    Route::get('/habitacion2', [SmartController::class, 'habitacion2'])->name('habitacion2');
    Route::get('/Consumos', [SmartController::class, 'Consumos'])->name('Consumos');
    Route::get('/Consumos-aire', [SmartController::class, 'Consumos_aire'])->name('Consumos-aire');
    Route::get('/Consumos-iluminacion', [SmartController::class, 'Consumos_iluminacion'])->name('Consumos-iluminacion');
    Route::get('/Consumos-tv', [SmartController::class, 'Consumos_tv'])->name('Consumos-tv');
    Route::get('/Consumos-termostato', [SmartController::class, 'Consumos_termostato'])->name('Consumos-termostato');
    
    Route::get('/Costos', [SmartController::class, 'Costos'])->name('Costos');
    
    Route::get('/Costos-view', [SmartController::class, 'Costosview'])->name('Costos-view');

    Route::get('/Mantenimiento', [SmartController::class, 'Mantenimiento'])->name('Mantenimiento');
    Route::get('/Reportes', [SmartController::class, 'Reportes'])->name('Reportes');
    Route::get('/Notificaciones', [SmartController::class, 'Notificaciones'])->name('Notificaciones');


});

require __DIR__.'/auth.php';
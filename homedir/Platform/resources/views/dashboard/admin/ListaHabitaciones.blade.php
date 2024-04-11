@extends('dashboard.layouts.admin')


@section('LinkListade')
    {{ route('admin.listahabitaciones') }}
@endsection
@section('Listade')
    Lista de Habitaciones
@endsection

@section('LinkCreacionde')
    {{ route('admin.crearhabitaciones') }}
@endsection
@section('Creacionde')
    Creacion de Habitaciones
@endsection

@section('admin-content')
    @if (Session::has('success'))
        <div class="toast active" id="successAlert" style="    width: 25%;">
            <div class="toast-content">
                <i class="fas bx bx-check check" style="background-color: #41A61D"></i>
                <div class="message">
                    <span class="text text-1">Exito!</span>
                    <span class="text text-2"> {{ Session::get('success') }}</span>
                </div>
            </div>
            <i class="fa-solid fa-xmark close"></i>
            <div class="progress-success active" style="background-color:#ffffff"></div>
        </div>
    @endif


    <h2
        style="margin: 0px 10px 15px 10px;
    display: flex;
    justify-content: space-between;
    align-items: baseline;">
        Lista de Habitaciones
        <a href="{{ route('admin.crearhabitaciones') }}" style="text-decoration: none">
            <button class="btn-create">Crear Nuevo Habitaciones<i class='bx bx-plus'></i></button>
        </a>

    </h2>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Piso</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Ocupacion</th>
                <th>Capacidad</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todasLasHabitaciones as $habitacion)
                <tr>
                    <td>
                        @foreach ($pisos as $piso)
                            @if ($piso['piso_id'] === $habitacion['habitacion_piso_id'])
                                {{ $piso['piso_nombre'] }}
                            @endif
                        @endforeach
                    </td>
                    
                    <td>
                        {{ $habitacion['habitacion_nombre'] }}
                    </td>
                    <td>
                        {{ $habitacion['habitacion_descripcion'] }}
                    </td>
                    <td>
                        @if ( $habitacion['habitacion_ocupacion'] == 1 )
                        <div style="display: flex; align-items: baseline;">
                            <span style="margin: 0px 5px 0px 0px;">
                                Disponible 
                            </span>
                            <i class='bx bxs-lock-open-alt'  style="color: deepskyblue; font-size: 15px;"></i>
                        </div>
                            @else
                            <div style="display: flex; align-items: baseline;">
                                <span style="margin: 0px 5px 0px 0px;">
                                    Ocupada 
                                </span>
                                <i class='bx bxs-lock-alt' style="color:#DC2626; font-size:15px"></i>
                            </div>
                        @endif
                    </td>
                    <td>
                        {{ $habitacion['habitacion_capacidad'] }}
                    </td>
                    <td>
                       @if ($habitacion['habitacion_estado'] == 1) 
                            <div style="display: flex; align-items: baseline;">
                                <span style="margin: 0px 5px 0px 0px;">
                                    Activo
                                </span>
                                <i class='bx bxs-circle' style="color: green; font-size: 10px;"></i>
                            </div>
                    @else
                            <div style="display: flex; align-items: baseline;">
                                <span style="margin: 0px 5px 0px 0px;">
                                    Inactivo
                                </span>
                                <i class='bx bxs-circle' style="color: red; font-size: 10px;"></i>
                            </div>
                        @endif 
                    </td>

                    <td>
                        <div style="display: flex">
             {{--                <button class="openModal btn-info" data-modal-id="modal-{{ $habitacion->habitacion_id }}">
                                Info <i class='bx bx-info-circle'></i></button> --}}

                        {{--     <div id="modal-{{ $habitacion->habitacion_id }}" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <p>Informacion del usuario</p>
                                    <hr>
                                    <li>
                                        Nombre: {{ $habitacion->habitacion_nombre }}
                                    </li>
                                    <li>
                                       Direccion: {{ $habitacion->habitacion_descripcion }}
                                    </li>

                                    <li>
                                        Categoria: {{ $habitacion->habitacion_ocupacion }}
                                     </li>
                                    <li>
                                        Estado: {{ $habitacion->habitacion_estado }}
                                    </li>
                                    <li>
                                        Creado el:{{ $habitacion->created_at->format('d/m/Y H:i:s') }}
                                    </li>
                                    <li>
                                        Ultima actualizacion:{{ $habitacion->updated_at->format('d/m/Y H:i:s') }}
                                    </li>
                                </div>
                            </div> --}}

                            <button class="btn-edit">Editar <i class='bx bx-edit'></i></button>

                            <form action="{{ route('habitaciones.destroy', $habitacion['habitacion_id']) }}" method="POST">
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="btn-delete">Eliminar <i class='bx bx-trash-alt'></i></button>
                           </form>  
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

<style>
    .toast {
        position: absolute;
        width: 40%;
        top: 25px;
        right: 30px;
        border-radius: 12px;
        background: #fff;
        padding: 20px 35px 20px 25px;
        box-shadow: 0 6px 20px -5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transform: translateX(calc(100% + 30px));
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.35);
    }

    .toast.active {
        transform: translateX(0%);
    }

    .toast .toast-content {
        display: flex;
        align-items: center;
    }

    .toast-content .check {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 35px;
        min-width: 35px;
        background-color: #DC2626;
        color: #fff;
        font-size: 20px;
        border-radius: 50%;
    }

    .toast-content .check {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 35px;
        min-width: 35px;
        background-color: #DC2626;
        color: #fff;
        font-size: 20px;
        border-radius: 50%;
    }

    .toast-content .message {
        display: flex;
        flex-direction: column;
        margin: 0 20px;
    }

    .message .text {
        font-size: 16px;
        font-weight: 400;
        color: #666666;
    }

    .message .text.text-1 {
        font-weight: 600;
        color: #333;
    }

    .toast .close {
        position: absolute;
        top: 10px;
        right: 15px;
        padding: 5px;
        cursor: pointer;
        opacity: 0.7;
    }

    .toast .close:hover {
        opacity: 1;
    }

    .toast .progress {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 3px;
        width: 100%;

    }

    .toast .progress-success {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 3px;
        width: 100%;

    }

    .toast .progress:before {
        content: "";
        position: absolute;
        bottom: 0;
        right: 0;
        height: 100%;
        width: 100%;
        background-color: #DC2626;
    }

    .toast .progress-success:before {
        content: "";
        position: absolute;
        bottom: 0;
        right: 0;
        height: 100%;
        width: 100%;
        background-color: #41A61D;
    }

    .progress.active:before {
        animation: progress 5s linear forwards;
    }

    @keyframes progress {
        100% {
            right: 100%;
        }
    }

    .toast.active~button {
        pointer-events: none;
    }
</style>
<script>
    setTimeout(function() {
        var successAlert = document.getElementById('successAlert');
        if (successAlert) {
            successAlert.style.display = 'none';
        }
    }, 5000);
</script>

<style scoped>
    .dataTables_wrapper {
        padding: 20px 30px;
        border: 2px solid #170F2D;
        border-radius: 4px;
    }

    .btn-create {

        background: deepskyblue;
        color: white;
        padding: 8px 15px;
        border-radius: 6px;
        box-shadow: 2px 2px 5px #0003;
        margin: 0px 5px;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        border: 2px solid white;
        cursor: pointer;
    }

    .btn-edit {
        cursor: pointer;
        height: -webkit-fill-available;
        background: #F68B1C;
        color: white;
        padding: 8px 15px;
        border-radius: 6px;
        box-shadow: 2px 2px 5px #0003;
        margin: 0px 5px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 2px solid white;
    }

    .btn-delete {
        cursor: pointer;

        background: #DC2626;
        color: white;
        padding: 8px 15px;
        border-radius: 6px;
        margin: 0px 5px;
        box-shadow: 2px 2px 5px #0003;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 2px solid white;
    }

    .btn-info {
        cursor: pointer;
        height: -webkit-fill-available;
        margin: 0px 5px;
        border: 2px solid white;
        background: #41A61D;
        color: white;
        padding: 8px 15px;
        border-radius: 6px;
        box-shadow: 2px 2px 5px #0003;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: #fff;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
    }

    .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 10px;
        cursor: pointer;
    }

    .section {
        width: 99%;
        background: white;
        height: 94% !important;
        border-radius: 6px;
        padding: 31px;
    }

    .dataTables_filter {
        margin-bottom: 10px;
    }

    .menu-list-1 {
        color: #F68B1C !important;
        border-left: 6px solid #F68B1C !important;
        border-right: 1px solid #F68B1C !important;
        border-top: 1px solid #F68B1C !important;
        border-bottom: 1px solid #F68B1C !important;
    }

    table.dataTable.no-footer {
        border: 1px solid rgba(0, 0, 0, 0.3);
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var openModalButtons = document.querySelectorAll('.openModal');
        var modals = document.querySelectorAll('.modal');

        openModalButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var modalId = this.getAttribute('data-modal-id');
                var modal = document.getElementById(modalId);
                modal.style.display = 'block';
            });
        });

        modals.forEach(function(modal) {
            modal.querySelector('.close').addEventListener('click', function() {
                modal.style.display = 'none';
            });

            window.addEventListener('click', function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            });
        });
    });
</script>

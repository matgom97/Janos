@extends('dashboard.layouts.admin')


@section('LinkListade')
{{route('admin.listausuarios')}}
@endsection
@section('Listade')
Lista de Usuarios
@endsection

@section('LinkCreacionde')
{{route('admin.crearusuarios')}}
@endsection
@section('Creacionde')
Creacion de Usuarios
@endsection



@section('admin-content')
    <h2
        style="margin: 0px 10px 15px 10px;
    display: flex;
    justify-content: space-between;
    align-items: baseline;">
        Lista de Usuarios del: {{ $hotel -> hotel_nombre}} 
        <a href="{{ route('admin.crearusuarios') }}" style="text-decoration: none">
            <button class="btn-create">Crear usuario<i class='bx bx-plus'></i></button>
        </a>

    </h2>
    
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Perfil</th>
                <th>Rol</th>
                <th>Identificacion
                </th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarioHotel as $user)
                <tr>
                    <td style="display: flex;
                    height: 52px;
                    align-items: center;">
                        <div class="user-photo" style="color: white; margin-right:5px">
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        </div>
                        {{ $user->name }}
                        @if ($user->id == Auth::user()->id)
                            (yo)
                        @endif
                    </td>
                    <td>
                        @if ($user->user_role == 1)
                            <p>Administrador</p>
                        @elseif ($user->user_role == 2)
                            <p>Gerente Operativo</p>
                        @elseif ($user->user_role == 3)
                            <p>Ejecutivo</p>
                        @elseif ($user->user_role == 4)
                            <p>Auxiliar</p>
                        @elseif ($user->user_role == 5)
                            <p>Cliente</p>
                        @else
                            <p>Rol no encontrado</p>
                        @endif
                    </td>

                    <td>{{ $user->numero_identificacion }}</td>
                    <td>
                        <div style="display: flex;align-items: baseline; ">
                            <span style="margin: 0px 5px 0px 0px">
                                Activo
                            </span>
                            <i class='bx bxs-circle'style="color:green; font-size:10px"></i>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex">


                            <button class="openModal btn-info" data-modal-id="modal-{{ $user->id }}">Info <i
                                    class='bx bx-info-circle'></i></button>

                            <div id="modal-{{ $user->id }}" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <p>Informacion del usuario</p>
                                    <hr>
                                    <li>
                                        Usuario: {{ $user->name }}

                                    </li>
                                    <li>
                                        Correo electronico: {{ $user->email }}

                                    </li>
                                    <li>
                                        Hotel: {{ optional($user->hotel)->hotel_nombre }}

                                    </li>
                                    <li>
                                        Creado el:{{ $user->created_at->format('d/m/Y H:i:s') }}

                                    </li>
                                    <li>
                                        Ultima actualizacion:{{ $user->updated_at->format('d/m/Y H:i:s') }}

                                    </li>

                                </div>
                            </div>

                            <button class="btn-edit">Editar <i class='bx bx-edit'></i></button>

                            <form action="{{ route('usuarios.destroy', $user) }}" method="POST">
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

<style scoped>
   .dataTable-responsive {
    overflow: hidden;
    overflow-x: scroll;
    width: 100%;
}

    table.dataTable tbody tr.odd {
    background-color: #f78b1c4f;
    }


    table#myTable thead {
    background: #f68b1c;
    color: #170f2d;
    }

    .dataTables_wrapper {
        padding: 20px 30px;
        border: 2px solid #170F2D;
        border-radius: 4px;
    }

    .btn-create {

        background: #170f2d;
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            var father = document.querySelector('.dataTables_filter')
            if (father){
                
                var NewDiv = document.createElement('div')
                NewDiv.className = 'dataTable-responsive'
                father.insertAdjacentElement('afterend', NewDiv)
                var move = document.querySelector('#myTable')
                NewDiv.appendChild(move)

            }
        }, 500);
        
    });
</script>

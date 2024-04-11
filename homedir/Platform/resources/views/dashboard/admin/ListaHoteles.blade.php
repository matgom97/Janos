@extends('dashboard.layouts.admin')


@section('LinkListade')
    {{ route('admin.listahoteles') }}
@endsection
@section('Listade')
    Lista de Hoteles
@endsection

@section('LinkCreacionde')
    {{ route('admin.crearhoteles') }}
@endsection
@section('Creacionde')
    Creacion de Hoteles
@endsection


@section('admin-content')
   


    <h2
        style="margin: 0px 10px 15px 10px;
    display: flex;
    justify-content: space-between;
    align-items: baseline;">
        Lista de Hoteles
        <a href="{{ route('admin.crearhoteles') }}" style="text-decoration: none">
            <button class="btn-create">Crear Nuevo Hotel<i class='bx bx-plus'></i></button>
        </a>

    </h2>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hoteles as $hotel)
                <tr>
                    <td class="td-photo">
                    @if(!empty($hotel->hotel_imagen))
                         <div class="img-hotel" style="background-image: url({{ asset('imagenes/' . $hotel->hotel_imagen) }})"></div>
                     @else
                         <div class="img-hotel" style="background-image: url({{ asset('../assets/img/hotel.jpg') }})"></div>
                     @endif
                    </td>
                    <td>
                        {{ $hotel->hotel_nombre }}
                    </td>
                    <td>
                        {{ $hotel->hotel_direccion }}

                    </td>

                    <td>
                        {{ $hotel->hotel_telefono }}
                    </td>

                    <td>
                        {{ $hotel->hotel_descripcion }}
                    </td>
                 
                    <td>
                        @if ($hotel->hotel_estado == 1)
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

                            <button class="openModal btn-info" data-modal-id="modal-{{ $hotel->id }}">
                                Info <i class='bx bx-info-circle'></i></button>

                            <div id="modal-{{ $hotel->id }}" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <p>Informacion del usuario</p>
                                    <hr>
                                    <li>
                                        Nombre: {{ $hotel->hotel_nombre }}

                                    </li>
                                    <li>
                                       Direccion: {{ $hotel->hotel_direccion }}

                                    </li>

                                    <li>
                                        Categoria: {{ $hotel->hotel_categoria }}
 
                                     </li>
                                    <li>
                                        Telefono: {{ $hotel->hotel_telefono }}

                                    </li>
                                    <li>
                                        Creado el:{{ $hotel->created_at->format('d/m/Y H:i:s') }}

                                    </li>
                                    <li>
                                        Ultima actualizacion:{{ $hotel->updated_at->format('d/m/Y H:i:s') }}
                                    </li>
                                </div>
                            </div>

                            <button class="btn-edit">Editar <i class='bx bx-edit'></i></button>

                            <form action="{{ route('hoteles.destroy', $hotel->id) }}" method="POST">
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
    .img-hotel{
    width: 90px;
    border-radius: 50%;
    border: 3px solid white;
    height: 90px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    box-shadow: 3px 3px 3px #0003;
    }
    .td-photo{
        display: flex;
                    align-items: center;
                    justify-content: center;
    }
</style>


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

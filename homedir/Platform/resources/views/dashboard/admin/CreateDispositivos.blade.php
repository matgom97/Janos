@extends('dashboard.layouts.admin')

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


    @section('LinkListade')
    {{route('admin.listadispositivos')}}
    @endsection
    @section('Listade')
    Lista de dispositivos
    @endsection
    
    @section('LinkCreacionde')
    {{route('admin.creardispositivos')}}
    @endsection
    @section('Creacionde')
    Creacion de dispositivos
    @endsection

   @if (session('error'))
        {{--   <div class="alert alert-danger" id="errorAlert">
        {{ session('error') }}
    </div> --}}

        <div class="toast active" id="errorAlert">
            <div class="toast-content">
                <i class="fas bx bx-x check"></i>
                <div class="message">
                    <span class="text text-1">Error</span>
                    <span class="text text-2"> {{ session('error') }}</span>
                </div>
            </div>
            <i class="fa-solid fa-xmark close"></i>
            <div class="progress active"></div>
        </div>
    @endif

    <h2
        style="margin: 0px 10px 15px 10px;
    display: flex;
    justify-content: space-between;
    align-items: baseline;">
        Crear dispositivos
        <a href="{{ route('admin.listadispositivos') }}" style="text-decoration: none">

            <button class="btn-create">
                <i class='bx bx-list-ul' style="font-size: 17px"></i>
                <span>
                    lista de dispositivos
                </span>
            </button>
        </a>
    </h2>
    <div class="container-form">
        <form method="POST" action="{{ route('dispositivos.store') }}" id="myForm">
            @csrf
            <div class="form-names">
                <div class="column">
                    <label for="dispositivo Nombre">
                        Tipo de dispositivo
                    </label>
                    <select name="dispositivo_nombre" class="input-form">
                        <option value="iluminacion">Iluminación</option>
                        <option value="aire-acondicionado">Aire acondicionado  </option>
                        <option value="television">Televisión</option>
                        <option value="termostato">Termostato</option>
                    </select>
                    
                    
                </div>
                
            
                <div class="column">
                <label for="habitacion_categoria">
                    Habitación
                </label>
                <select name="dispositivo_habitacion_id" class="input-form">
                    @foreach ($habitaciones as $habitacion)
                        <option value="{{ $habitacion->habitacion_id }}">{{ $habitacion->habitacion_nombre }}</option>        
                    @endforeach
                </select>
            </div>

           
            </div>
            <div class="form">
                <div class="column">
                    <label for="dispositivo descripcion">
                         dispositivo descripcion
                        <span style="color: red">*</span>
                    <textarea required style="height:120px" class="input-form"  name="dispositivo_descripcion" id="" cols="40" rows="10" placeholder="Descripcion corta de la dispositivo"></textarea>
                    </label>
                </div>

                <div class="column">
                    <label for="dispositivo descripcion">
                         ID Janos
                        <span style="color: red">*</span>
                        <input required name="id_janos" class="input-form" type="text" placeholder="Nombre de la dispositivo">
                    </label>
                </div>

                <div class="column">
                    <label for="dispositivo descripcion">
                         ID Home Assistant
                        <span style="color: red">*</span>
                        <input required name="id_home_assistant" class="input-form" type="text" placeholder="Nombre de la dispositivo">                    </label>
                </div>
                
                
            </div>
            <button class="btn-create" type="submit">Crear dispositivo</button>
        </form>
    </div>
@endsection

<style scoped>
    .container-form {
        border: 2px solid #17102d;
        padding: 35px;
        border-radius: 6px;
    }

    .identification {
        display: flex;
        width: 49%;
    }

    .input-form {
        padding: 10px 10px !important;
        border-radius: 4px !important;
        border: 1px solid rgba(0, 0, 0, 0.3);
        font-size: 15px !important;
        color: rgb(0, 0, 0) !important;
        background: #2196f305 !important;
        margin: 10px 0px 20px 0px !important;
        width: 95% !important;
        height: 45px;
    }


    .column {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .form {
        display: flex;
    }

    .form-names {
        width: 100%;
        justify-content: space-between;
        display: flex;
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


    .menu-list-2 {
        color: #F68B1C !important;
        border-left: 6px solid #F68B1C !important;
        border-right: 1px solid #F68B1C !important;
        border-top: 1px solid #F68B1C !important;
        border-bottom: 1px solid #F68B1C !important;
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

    .alert-danger {
        background: #dc26267d;
        border-radius: 4px;
        margin: 10px;
        padding: 15px;
        border: 2px #DC2626 solid;
        color: #ffffff;
    }

    .alert-success {
        background: #42a61d73;
        border-radius: 4px;
        margin: 10px;
        padding: 15px;
        border: 2px #41A61D solid;
        color: #ffffff;
    }
</style>


<script>
    setTimeout(function() {
        var errorAlert = document.getElementById('errorAlert');
        if (errorAlert) {
            errorAlert.style.display = 'none';
        }
    }, 5000);
</script> 

<script>
    setTimeout(function() {
        var successAlert = document.getElementById('successAlert');
        if (successAlert) {
            successAlert.style.display = 'none';
        }
    }, 5000);
</script>
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
    document.addEventListener("DOMContentLoaded", function() {

    const button2 = document.querySelector("button"),
        toast2 = document.querySelector(".toast");
    (closeIcon = document.querySelector(".close")),
    (progress = document.querySelector(".progress"));

    let timer11, timer22;

    button2.addEventListener("click", () => {
        toast2.classList.add("active");
        progress.classList.add("active");

        timer11 = setTimeout(() => {
            toast2.classList.remove("active");
        }, 5000); //1s = 1000 milliseconds

        timer22 = setTimeout(() => {
            progress.classList.remove("active");
        }, 5300);
    });

    closeIcon.addEventListener("click", () => {
        toast.classList.remove("active");

        setTimeout(() => {
            progress.classList.remove("active");
        }, 300);

        clearTimeout(timer1);
        clearTimeout(timer2);
    });
})
</script> 

 <script>
    document.addEventListener("DOMContentLoaded", function() {
        const button = document.querySelector("button");
        const toast = document.querySelector(".toast");
        const closeIcon = document.querySelector(".close");
        const progress = document.querySelector(".progress-success");

        let timer1, timer2;

        button.addEventListener("click", () => {
            toast.classList.add("active");
            progress.classList.add("active");

            timer1 = setTimeout(() => {
                toast.classList.remove("active");
            }, 5000); // 1s = 1000 milliseconds

            timer2 = setTimeout(() => {
                progress.classList.remove("active");
            }, 5300);
        });

        closeIcon.addEventListener("click", () => {
            toast.classList.remove("active");

            setTimeout(() => {
                progress.classList.remove("active");
            }, 300);

            clearTimeout(timer1);
            clearTimeout(timer2);
        });
    });
</script> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#piso').change(function () {
            var pisoId = $(this).val();
            if (pisoId) {
                $.ajax({
                    type: 'GET',
                    url: '/cargar-habitaciones/' + pisoId,
                    success: function (data) {
                        $('#habitacion').empty();
                        $('#habitacion').append($('<option>', {
                            value: '',
                            text: 'Selecciona una habitación'
                        }));
                        $.each(data, function (key, value) {
                            $('#habitacion').append($('<option>', {
                                value: value.habitacion_id,
                                text: value.habitacion_nombre
                            }));
                        });
                    }
                });
            } else {
                $('#habitacion').empty();
                $('#habitacion').append($('<option>', {
                    value: '',
                    text: 'Selecciona un piso primero'
                }));
            }
        });
    });
</script>
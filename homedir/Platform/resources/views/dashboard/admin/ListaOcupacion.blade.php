@extends('dashboard.layouts.admin')

@section('LinkListade')
    {{ route('admin.listapisos') }}
@endsection
@section('Listade')
    Ocupacion Hotel
@endsection
@section('LinkCreacionde')
    {{ route('admin.crearpisos') }}
@endsection
@section('Creacionde')
    Administrar Ocupacion
@endsection
@section('Lista')
    <ul class="list-space">
        <h1>Por piso</h1>
        <span class="list-item">Piso 1</span>
        <span class="list-item">Piso 2</span>
        <span class="list-item">Piso 3</span>
        <span class="list-item">Piso 4</span>

    </ul>
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


    <h2 class="title-main">
        Ocupacion del hotel
        <a href="{{ route('admin.crearpisos') }}" style="text-decoration: none">
            <button class="btn-create">Administrar ocupacion <i class='bx bx-lock-open-alt'
                    style="margin-left: 5px"></i></button>
        </a>

    </h2>
    <div id="interactive-map-section" style="display: flex;">
        <div class="box">
            <div class="marker" id="marker11">
                <span class="numero" style="margin-left: 52px;">204</span>
                <span class="temperatura"><i class='bx bxs-thermometer'></i> 28
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-temperature-celsius"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#fff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M20 9a3 3 0 0 0 -3 -3h-1a3 3 0 0 0 -3 3v6a3 3 0 0 0 3 3h1a3 3 0 0 0 3 -3" />
                    </svg>
                </span>
                <span class="temperatura"><img class="c13" src="../assets/img/recurso1.png" alt="">0/1 </span>
            </div>
            <div class="marker-information" id="hab204">
                <h2 class="marker-title">Habitacion #204<span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <label for="">Estado:</label>
                    <select name="" id="habitacionEstado204">
                        <option value="">Seleccione un estado</option>
                        <option value="0">Ocupada</option>
                        <option value="1">Disponible</option>
                    </select>
                    <label for="">Capacidad:</label>
                    <input type="text" disabled value="1 persona">

                    <label for="">Ocupacion:</label>
                    <select name="" id="">
                        <option value="0">1 persona</option>
                        <option value="1">2 personas</option>
                    </select>
                    <span style="font-size: 14px; margin-top:10px">temperatura: 20°c</span>
                </ul>
            </div>

            <div class="marker" id="marker111">
                <span class="numero" style="margin-left: 35px;">203</span>
                <span class="temperatura" style="    margin-left: -30px;"><i class='bx bxs-thermometer'></i> 29
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-temperature-celsius"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#fff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M20 9a3 3 0 0 0 -3 -3h-1a3 3 0 0 0 -3 3v6a3 3 0 0 0 3 3h1a3 3 0 0 0 3 -3" />
                    </svg>
                </span>
                <span class="temperatura" style="    margin-left: -30px;"><img class="c13"
                        src="../assets/img/recurso1.png" alt="">2/2 </span>
            </div>
            <div class="marker-information" id="hab203">
                <h2 class="marker-title">Habitacion #203<span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <label for="">Estado:</label>
                    <select name="" id="habitacionEstado203">
                        <option value="">Seleccione un estado</option>
                        <option value="0">Ocupada</option>
                        <option value="1">Disponible</option>
                    </select>
                    <label for="">Capacidad:</label>
                    <input type="text" disabled value="2 personas">

                    <label for="">Ocupacion:</label>
                    <select name="" id="">
                        <option value="0">1 persona</option>
                        <option value="1">2 personas</option>
                    </select>
                    <span style="font-size: 14px; margin-top:10px">temperatura: 20°c</span>
                </ul>
            </div>

            <div class="marker" id="marker22">
                <span class="numero" style="margin-left: 52px;">202</span>
                <span class="temperatura" style=""><i class='bx bxs-thermometer'></i> 30
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-temperature-celsius"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#fff"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M20 9a3 3 0 0 0 -3 -3h-1a3 3 0 0 0 -3 3v6a3 3 0 0 0 3 3h1a3 3 0 0 0 3 -3" />
                    </svg>
                </span>
                <span class="temperatura"><img class="c13" src="../assets/img/recurso1.png" alt=""> 0/2
                </span>
            </div>

            <div class="marker-information" id="hab202">
                <h2 class="marker-title">Habitacion #202<span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <label for="">Estado:</label>
                    <select name="" id="habitacionEstado202">
                        <option value="">Seleccione un estado</option>
                        <option value="0">Ocupada</option>
                        <option value="1">Disponible</option>
                    </select>
                    <label for="">Capacidad:</label>
                    <input type="text" disabled value="2 personas">

                    <label for="">Ocupacion:</label>
                    <select name="" id="">
                        <option value="0">1 persona</option>
                        <option value="1">2 personas</option>
                    </select>
                    <span style="font-size: 14px; margin-top:10px">temperatura: 20°c</span>
                </ul>
            </div>

            <div class="marker" id="marker33">
                <span class="numero" style="margin-left: 22px;">206</span>
                <span class="temperatura" style="    margin-left: -50px;"><i class='bx bxs-thermometer'></i> 25
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-temperature-celsius"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#fff"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M20 9a3 3 0 0 0 -3 -3h-1a3 3 0 0 0 -3 3v6a3 3 0 0 0 3 3h1a3 3 0 0 0 3 -3" />
                    </svg>
                </span>
                <span class="temperatura" style="    margin-left: -50px;"><img class="c13"
                        src="../assets/img/recurso1.png" alt="">1/1 </span>
            </div>

            <div class="marker-information" id="hab206">
                <h2 class="marker-title">Habitacion #206<span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <label for="">Estado:</label>
                    <select name="" id="habitacionEstado206">
                        <option value="">Selecciona un estado</option>
                        <option value="0">Ocupada</option>
                        <option value="1">Disponible</option>
                    </select>
                    <label for="">Capacidad:</label>
                    <input type="text" disabled value="1 persona">

                    <label for="">Ocupacion:</label>
                    <select name="" id="">
                        <option value="0">1 persona</option>
                        <option value="1">2 personas</option>
                    </select>
                    <span style="font-size: 14px; margin-top:10px">temperatura: 20°c</span>
                </ul>
            </div>

            <div class="marker" id="marker44">
                <span class="numero" style="margin-left: 52px;">205</span>
                <span class="temperatura" style="    margin: 0px 0px 0px 45px;"><i class='bx bxs-thermometer'></i> 29
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-temperature-celsius"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#fff"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M20 9a3 3 0 0 0 -3 -3h-1a3 3 0 0 0 -3 3v6a3 3 0 0 0 3 3h1a3 3 0 0 0 3 -3" />
                    </svg>
                </span>
                <span class="temperatura" style="    margin: 0px 0px 0px 45px;"><img class="c13"
                        src="../assets/img/recurso1.png" alt="">0/2 </span>
            </div>
            <div class="marker-information" id="hab205">
                <h2 class="marker-title">Habitacion #205<span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <label for="">Estado:</label>
                    <select name="" id="habitacionEstado205">
                        <option value="0">Seleccione un estado</option>
                        <option value="0">Ocupada</option>
                        <option value="1">Disponible</option>
                    </select>
                    <label for="">Capacidad:</label>
                    <input type="text" disabled value="2 personas">

                    <label for="">Ocupacion:</label>
                    <select name="" id="">
                        <option value="0">1 persona</option>
                        <option value="1">2 personas</option>
                    </select>
                    <span style="font-size: 14px; margin-top:10px">temperatura: 20°c</span>
                </ul>
            </div>

            <div class="marker" id="marker55">
                <span class="numero" style="margin-top: 95px;margin-left: 52px;">201</span>
                <span class="temperatura" style="    margin-left: 15px;"><i class='bx bxs-thermometer'></i> 26
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-temperature-celsius"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#fff"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M20 9a3 3 0 0 0 -3 -3h-1a3 3 0 0 0 -3 3v6a3 3 0 0 0 3 3h1a3 3 0 0 0 3 -3" />
                    </svg>
                </span>
                <span class="temperatura" style="    margin-left: 15px;"><img class="c13"
                        src="../assets/img/recurso1.png" alt="">0/1 </span>
            </div>
            <div class="marker-information" id="hab201">
                <h2 class="marker-title">Habitacion #201 <span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <label for="">Estado:</label>
                    <select name="" id="habitacionEstado201">
                        <option value="">Selecciona un estado</option>
                        <option value="0">Ocupada</option>
                        <option value="1">Disponible</option>
                    </select>
                    <label for="">Capacidad:</label>
                    <input type="text" disabled value="1 persona">

                    <label for="">Ocupacion:</label>
                    <select name="" id="">
                        <option value="0">1 persona</option>
                        <option value="1">2 personas</option>
                    </select>
                    <span style="font-size: 14px; margin-top:10px">temperatura: 20°c</span>
                </ul>
            </div>

            <div class="marker" id="marker66">
                <span class="numero" style="margin-left: 85px;">207</span>
                <span class="temperatura" style="margin-left: 50px;"><i class='bx bxs-thermometer'></i> 31
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-temperature-celsius"
                        width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#fff"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M20 9a3 3 0 0 0 -3 -3h-1a3 3 0 0 0 -3 3v6a3 3 0 0 0 3 3h1a3 3 0 0 0 3 -3" />
                    </svg>
                </span>
                <span class="temperatura" style="margin-left: 50px;"><img class="c13"
                        src="../assets/img/recurso1.png" alt="">2/2 </span>

            </div>
            <div class="marker-information" id="hab207">
                <h2 class="marker-title">Habitacion #207 <span class="close">X</span> </h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <label for="">Estado:</label>
                    <select name="" id="habitacionEstado207">
                        <option value="0">Seleccione un estado</option>
                        <option value="0">Ocupada</option>
                        <option value="1">Disponible</option>
                    </select>
                    <label for="">Capacidad:</label>
                    <input type="text" disabled value="2 personas">

                    <label for="">Ocupacion:</label>
                    <select name="" id="">
                        <option value="0">1 persona</option>
                        <option value="1">2 personas</option>
                    </select>
                    <span style="font-size: 14px; margin-top:10px">temperatura: 20°c</span>
                </ul>
            </div>
        </div>
        <div class="w20">

            <ul class="column">
                <h4 class="row-center">
                    <div class="disponible">
                    </div>
                    Disponible
                </h4>

                <h4 class="row-center">
                    <div class="ocupado">
                    </div>
                    Ocupado
                </h4>
                <h4 class="row-center">
                    <i class='bx bx-male' style="font-size: 20px;"></i>
                    Capacidad
                </h4>
                <h4 class="row-center">
                    <div>
                    </div>
                    <i class='bx bxs-thermometer' style="    font-size: 20px;"></i>
                    Temperatura
                </h4>
            </ul>
        </div>
    </div>
@endsection
<style>
    @media (max-width: 1440px) {

        .section {
            padding: 15px !important;
        }
    }


    .marker-drop {
        border: 1px solid orange;
    }

    .marker-title {
        padding: 0px 20px;
        font-size: 15px;
        font-weight: 800;
        display: flex;
        justify-content: space-between;
    }

    .marker-information {
        width: 200px;
        background: white;
        border: 1px solid;
        border-radius: 4px;
        position: absolute;
        top: -10%;
        left: 24.5%;
        z-index: 3;
    }

    .marker-information::before {
        content: "";
        position: absolute;
        transform: rotate(135deg);
        width: 10px;
        height: 10px;
        background: white;
        border-right: 1px solid black;
        border-top: 1px solid black;
        bottom: -6px;
        left: 95px;
    }


    #hab201 {
        top: 50%;
        left: .5%;
        display: none
    }

    #hab202 {
        top: 50%;
        left: 25.5%;
        display: none
    }

    #hab203 {
        top: 50%;
        left: 49%;
        display: none
    }

    #hab204 {
        top: 50%;
        left: 75%;
        display: none
    }

    #hab205 {
        top: -10%;
        left: 24.5%;
        display: none
    }

    #hab206 {
        top: -10%;
        left: 49%;
        display: none
    }

    #hab207 {
        top: -10%;
        left: 74.5%;
        display: none
    }

    .title-main {
        margin: 0px 10px 15px 10px;
        display: flex;
        justify-content: space-between;
        align-items: baseline;
    }

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

    .list-item {
        margin-left: 20px;
        cursor: pointer;
        margin-bottom: 10px
    }

    .list-item:hover {
        color: orange
    }

    .list-space {
        display: flex;
        flex-direction: column;
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

    .w20 {
        width: 20%;
    }

    .row-center {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 10px 10px 10px 0px;
    }

    .column {
        display: flex;
        flex-direction: column;
    }

    .disponible {
        background: #ec9e35;
        width: 20px;
        height: 10px;
        border: 1px solid;
        margin-right: 5px;
    }

    .ocupado {
        background: #424459;
        width: 20px;
        height: 10px;
        border: 1px solid;
        margin-right: 5px;
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
        background: #ec9e35;
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

    .c13 {
        width: 13px;
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

    .active-nav {

        background-color: #f68b1c;
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
        color: #ec9e35 !important;
        border-left: 6px solid #ec9e35 !important;
        border-right: 1px solid #ec9e35 !important;
        border-top: 1px solid #ec9e35 !important;
        border-bottom: 1px solid #ec9e35 !important;
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


<style>
    /* --- INTERACTIVE MAP --- */
    .btn-interactive {
        background: white;
        border: 1px solid white;
        border-radius: 2px;
    }

    * {
        font-family: 'Poppins', sans-serif;
    }

    #interactive-map-section {
        margin-top: 50px;
    }


    #interactive-map-section .box {
        width: 900px;
        height: 550px;
        margin-left: auto;

        background: url('/assets/img/mapa-piso-2.png') no-repeat;
        background-size: contain;
        background-position: center;
        position: relative;
    }

    /* Change color of markers */
    #interactive-map-section .marker,
    #interactive-map-section .marker-info,
    #interactive-map-section .marker-info::after,
    #interactive-map-section .marker::before {
        color: #fff;
    }


    #interactive-map-section .marker::after {
        content: "";
        line-height: 30px;
        font-weight: 400;
        position: absolute;
        width: 30px;
        left: 0px;
        top: 0px;
        font-size: 24px;
        transition: all ease 0.35s;
    }

    #interactive-map-section .marker.active::after {
        transform: rotate(135deg);
    }

    #interactive-map-section .marker-info {
        display: none;
        position: absolute;
        bottom: 50px;
        width: 200px;
        left: -85px;
        text-align: center;
        padding: 15px 12px;
        box-sizing: border-box;
        border-radius: 3px;
        animation: fadeDown 0.5s ease forwards 1;
        opacity: 0;
        transform: translateY(-15px);
        font-size: 12px;
        font-weight: 500;
        cursor: default;
    }

    #interactive-map-section .marker-info p {
        font-size: 11px;
        line-height: 1.8em;
        color: #fff;
    }

    #interactive-map-section .marker-info h4 {
        font-size: 14px;
        font-weight: 700;
        margin: 0;
        text-align: left;
        color: #fff;
        margin-bottom: 3px;
    }

    #interactive-map-section .marker-info h4 img {
        margin-right: 5px;
    }

    @keyframes fadeDown {
        0% {
            opacity: 0;
            transform: translateY(-15px);
        }

        100% {
            opacity: 1;
            transform: translateY(0px);
        }
    }

    #interactive-map-section .marker.active .marker-info {
        display: block;
    }

    #interactive-map-section .marker-info::after {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        bottom: -5px;
        left: calc(50% - 5px);
        transform: rotate(45deg);
        z-index: 999;
    }

    #interactive-map-section .marker .mobile-map {
        display: none;
    }

    @media screen and (max-width:720px) {
        #interactive-map-section .box {
            width: 100%;
            height: auto;
            background: none;
        }

        #interactive-map-section .marker {
            position: relative;
            left: auto !important;
            top: auto !important;
            bottom: auto !important;
            right: auto !important;
            display: block;
            width: auto;
            height: auto;
            border-radius: 3px;
            transform: none;
        }

        #interactive-map-section .marker-info {
            display: block;
            animation: none;
            opacity: 1;
            position: relative;
            left: auto;
            top: auto;
            bottom: auto;
            right: auto;
            transform: none;
            margin-bottom: 10px;
            width: 100%;
        }

        #interactive-map-section .marker-info::after {
            display: none;
        }

        #interactive-map-section .marker .marker-info h4 {
            margin-bottom: 0px;
        }

        #interactive-map-section .marker .marker-info h4::before,
        #interactive-map-section .marker .marker-info h4::after {
            content: "";
            width: 20px;
            height: 3px;
            background: #fff;
            position: absolute;
            right: 18px;
            top: 26px;
            transition: all ease 0.4s;
        }

        #interactive-map-section .marker .marker-info h4::after {
            transform: rotate(90deg);
        }

        #interactive-map-section .marker.active .marker-info h4::before,
        #interactive-map-section .marker.active .marker-info h4::after {
            transform: rotate(180deg);
        }

        #interactive-map-section .marker.active .marker-info h4 {
            margin-bottom: 10px;
        }

        #interactive-map-section .marker-info p {
            display: none;
            margin-bottom: 0;
        }

        #interactive-map-section .marker.active .marker-info p {
            display: block;
        }

        #interactive-map-section .marker,
        #interactive-map-section .marker-info,
        #interactive-map-section .marker-info::after {
            background: #04285E;
            color: #fff;
        }

        #interactive-map-section .map-title-text {
            padding-top: 0px;
            margin-bottom: 20px;
        }

        #interactive-map-section .marker.active .mobile-map {
            display: block;
        }

        #interactive-map-section .marker::after,
        #interactive-map-section .marker::before {
            display: none;
        }


    }

    #marker11 {
        position: absolute;
        transform: translateY(42%) translateX(-76%) !important;
        font-weight: 400 !important;
        width: 232px !important;
        height: 230px !important;
        text-align: center !important;
        cursor: pointer !important;
        transition: all ease 0.3s !important;
        z-index: 2 !important;
        left: 91% !important;
        bottom: 20% !important;
        background: #ec9e35 ;
        border: 2px solid black !important;
        clip-path: polygon(28% 20%, 28% 4%, 96% 4%, 96% 87%, 70% 87%, 70% 81%, 26% 80%, 26% 72%, 0 72%, 0 20%);
    }

    .numero {
        color: rgb(255, 255, 255) !important;
        font-weight: 900;
        font-size: 24px;
        border: 2px solid rgb(255, 255, 255);
        width: 50% !important;
        margin-top: 55px;
        display: block;
        margin-left: 35px;
    }

    #marker111 {
        position: absolute !important;
        transform: translateY(42%) translateX(-73%) !important;
        font-weight: 400 !important;
        width: 214px !important;
        height: 230px !important;
        text-align: center !important;
        cursor: pointer !important;
        transition: all ease 0.3s !important;
        z-index: 2 !important;
        left: 65% !important;
        bottom: 20% !important;
        background: #424459 ;
        box-shadow: 0 5px 10px -1px rgba(158, 100, 0, 0.4) !important;
        /* border: 2px solid black !important; */
        clip-path: polygon(66% 3%, 66% 19%, 97% 19%, 97% 72%, 78% 72%, 78% 94%, 1% 94%, 1% 70%, 1% 35%, 1% 3%);
    }

    .temperatura {
        font-size: 25px;
        display: flex !important;
        justify-content: center;
        align-items: center !important;
        font-weight: 600;
        color: rgb(255, 255, 255) !important;


    }

   
    #marker22 {
        position: absolute !important;
        transform: translateY(42%) translateX(-289%) !important;
        font-weight: 400 !important;
        width: 204px !important;
        height: 230px !important;
        text-align: center !important;
        cursor: pointer !important;
        transition: all ease 0.3s !important;
        z-index: 2 !important;
        left: 91% !important;
        bottom: 20% !important;
        background: #424459 ;
        border: 2px solid black !important;
        clip-path: polygon(50% 4%, 100% 4%, 100% 24%, 100% 80%, 100% 94%, 35% 94%, 35% 71%, 3% 71%, 4% 30%, 4% 4%);
    }

    #marker33 {
        position: absolute;
        transform: translateY(-81%) translateX(-189%);
        font-weight: 400;
        width: 205px;
        height: 230px;
        text-align: center;
        cursor: pointer;
        transition: all ease 0.3s;
        z-index: 2;
        left: 91%;
        bottom: 20%;
        background: #424459 ;
        border: 2px solid black;
        clip-path: polygon(70% 3%, 70% 56%, 100% 56%, 100% 100%, 53% 100%, 4% 100%, 4% 3%);
    }

    #marker44 {
        position: absolute !important;
        transform: translateY(-81%) translateX(-294%) !important;
        font-weight: 400 !important;
        width: 200px !important;
        height: 230px !important;
        text-align: center !important;
        cursor: pointer !important;
        transition: all ease 0.3s !important;
        z-index: 2 !important;
        left: 91% !important;
        bottom: 20% !important;
        background: #ec9e35 ;
        border: 2px solid black !important;
        clip-path: polygon(30% 0%, 30% 12%, 57% 12%, 57% 3%, 100% 3%, 100% 99%, 33% 99%, 33% 53%, 3% 54%, 3% 0%);
    }

    #marker55 {
        position: absolute !important;
        transform: translateY(25%) translateX(-394%) !important;
        font-weight: 400 !important;
        width: 200px !important;
        height: 255px !important;
        text-align: center !important;
        cursor: pointer !important;
        transition: all ease 0.3s !important;
        z-index: 2 !important;
        left: 91% !important;
        bottom: 20% !important;
        background: #ec9e35;
        border: 2px solid black !important;
        clip-path: polygon(68% 3%, 68% 26%, 99% 26%, 99% 72%, 99% 96%, 32% 96%, 12% 96%, 12% 26%, 4% 26%, 4% 3%);
    }

    #marker66 {
        position: absolute !important;
        transform: translateY(-81%) translateX(-79%) !important;
        font-weight: 400 !important;
        width: 232px !important;
        height: 230px !important;
        text-align: center !important;
        cursor: pointer !important;
        transition: all ease 0.3s !important;
        z-index: 2 !important;
        left: 91% !important;
        bottom: 20% !important;
        background: #424459 ;
        border: 2px solid black !important;
        clip-path: polygon(27% 56%, 27% 2%, 98% 2%, 98% 100%, 53% 100%, 3% 100%, 3% 56%)
    }


    #marker11 span {
        display: block;
        color: white;
    }

    0 #marker111 span {
        display: block;
        color: white;
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.querySelector('#marker44').addEventListener('click', function() {
            var element = document.querySelector('#hab205');
            var style = window.getComputedStyle(element);
            var display = style.getPropertyValue('display');

            if (display === 'none') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        });

        var select = document.querySelector('#habitacionEstado205');
        var marker = document.querySelector('#marker44');

        // Añade un controlador de eventos al select
        select.addEventListener('change', function() {
            // Cambia el color de fondo del marcador basado en el valor del select
            if (select.value === '0') {
                marker.style.backgroundColor =
                '#424459'; // Cambia esto al color que quieras para cuando el estado sea 0
            } else {
                marker.style.backgroundColor =
                '#ec9e35'; // Cambia esto al color que quieras para cuando el estado no sea 0
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.querySelector('#marker11').addEventListener('click', function() {
            var element = document.querySelector('#hab204');
            var style = window.getComputedStyle(element);
            var display = style.getPropertyValue('display');

            if (display === 'none') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        });
        var select = document.querySelector('#habitacionEstado204');
        var marker = document.querySelector('#marker11');

        // Añade un controlador de eventos al select
        select.addEventListener('change', function() {
            // Cambia el color de fondo del marcador basado en el valor del select
            if (select.value === '0') {
                marker.style.backgroundColor =
                '#424459'; // Cambia esto al color que quieras para cuando el estado sea 0
            } else {
                marker.style.backgroundColor =
                '#ec9e35'; // Cambia esto al color que quieras para cuando el estado no sea 0
            }
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.querySelector('#marker111').addEventListener('click', function() {
            var element = document.querySelector('#hab203');
            var style = window.getComputedStyle(element);
            var display = style.getPropertyValue('display');

            if (display === 'none') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        });
        var select = document.querySelector('#habitacionEstado203');
        var marker = document.querySelector('#marker111');

        // Añade un controlador de eventos al select
        select.addEventListener('change', function() {
            // Cambia el color de fondo del marcador basado en el valor del select
            if (select.value === '0') {
                marker.style.backgroundColor =
                '#424459'; // Cambia esto al color que quieras para cuando el estado sea 0
            } else {
                marker.style.backgroundColor =
                '#ec9e35'; // Cambia esto al color que quieras para cuando el estado no sea 0
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.querySelector('#marker22').addEventListener('click', function() {
            var element = document.querySelector('#hab202');
            var style = window.getComputedStyle(element);
            var display = style.getPropertyValue('display');

            if (display === 'none') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        });
        var select = document.querySelector('#habitacionEstado202');
        var marker = document.querySelector('#marker22');

        // Añade un controlador de eventos al select
        select.addEventListener('change', function() {
            // Cambia el color de fondo del marcador basado en el valor del select
            if (select.value === '0') {
                marker.style.backgroundColor =
                '#424459'; // Cambia esto al color que quieras para cuando el estado sea 0
            } else {
                marker.style.backgroundColor =
                '#ec9e35'; // Cambia esto al color que quieras para cuando el estado no sea 0
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.querySelector('#marker33').addEventListener('click', function() {
            var element = document.querySelector('#hab206');
            var style = window.getComputedStyle(element);
            var display = style.getPropertyValue('display');

            if (display === 'none') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        });
        var select = document.querySelector('#habitacionEstado206');
        var marker = document.querySelector('#marker33');

        // Añade un controlador de eventos al select
        select.addEventListener('change', function() {
            // Cambia el color de fondo del marcador basado en el valor del select
            if (select.value === '0') {
                marker.style.backgroundColor =
                '#424459'; // Cambia esto al color que quieras para cuando el estado sea 0
            } else {
                marker.style.backgroundColor =
                '#ec9e35'; // Cambia esto al color que quieras para cuando el estado no sea 0
            }
        });


    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.querySelector('#marker55').addEventListener('click', function() {
            var element = document.querySelector('#hab201');
            var style = window.getComputedStyle(element);
            var display = style.getPropertyValue('display');

            if (display === 'none') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        });

        var select = document.querySelector('#habitacionEstado201');
        var marker = document.querySelector('#marker55');

        // Añade un controlador de eventos al select
        select.addEventListener('change', function() {
            // Cambia el color de fondo del marcador basado en el valor del select
            if (select.value === '0') {
                marker.style.backgroundColor =
                '#424459'; // Cambia esto al color que quieras para cuando el estado sea 0
            } else {
                marker.style.backgroundColor =
                '#ec9e35'; // Cambia esto al color que quieras para cuando el estado no sea 0
            }
        });

    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.querySelector('#marker66').addEventListener('click', function() {
            var element = document.querySelector('#hab207');
            var style = window.getComputedStyle(element);
            var display = style.getPropertyValue('display');

            if (display === 'none') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        });


        var select = document.querySelector('#habitacionEstado207');
        var marker = document.querySelector('#marker66');

        // Añade un controlador de eventos al select
        select.addEventListener('change', function() {
            // Cambia el color de fondo del marcador basado en el valor del select
            if (select.value === '0') {
                marker.style.backgroundColor =
                '#424459'; // Cambia esto al color que quieras para cuando el estado sea 0
            } else {
                marker.style.backgroundColor =
                '#ec9e35'; // Cambia esto al color que quieras para cuando el estado no sea 0
            }
        });

    });
</script>

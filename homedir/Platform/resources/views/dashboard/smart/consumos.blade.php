@extends('dashboard.layouts.smart')

@section('content')
    <ul class="list-space">
        <h1>
            Consumos
        </h1>
        <span class="button1" style="    display: flex;
        background-color: #F68B1C;
        color: white;
        padding: 5px 20px;
        width: max-content;
        border-radius:5px;
        cursor: pointer;
        ">
            <i class='bx bx-signal-5'> </i>Generales
        </span>

        <span class="" style="display: flex;
            background-color: lightgray;
            color: black;
            padding: 5px 20px;
            width: max-content;
            border-radius:5px;
            margin: 20px 0px ">
                <i class='bx bxl-deezer' ></i>Especificos
        </span>

                    
        <span class="" style="display: flex;
            background-color: lightgray;
            color: black;
            padding: 5px 20px;
            width: max-content;
            border-radius:5px">
                <i class='bx bx-objects-horizontal-right' ></i>Comparativos
        </span>

        
        <div style="display: none; flex-direction: column" class="general">
        <h1>Por piso</h1>
            <span class="list-item">Piso 1</span>
            <span class="list-item">Piso 2</span>
            <span class="list-item">Piso 3</span>
            <span class="list-item">Piso 4</span>
            <div>
                <h1>Por aparato</h1>
                <div style="display: flex; flex-direction: column">
                    <a class="list-item" href="{{ route('Consumos-aire') }}" style="text-decoration:none">
                        <span class="">Aire acondicionado</span>
                    </a>
                    <a class="list-item" href="{{ route('Consumos-tv') }}" style="text-decoration:none">

                    <span class="">Televisor</span>
                </a>

                    <a class="list-item" href="{{ route('Consumos-iluminacion') }}" style="text-decoration:none">
                        <span class="">Iluminacion</span>
                    </a>

                    <a class="list-item" href="{{ route('Consumos-termostato') }}" style="text-decoration:none">
                        <span class="">Termostato</span>
                    </a>
                    <span class="list-item">Horas ON/OFF</span>
                    <span class="list-item">Consolidado</span>
                </div>
                <h1>Ver por fecha</h1>
                <div style="display: flex; flex-direction: column">
                    <span class="list-item">Mes</span>
                    <div>
 @include('dashboard.components.calendar')

                    
                        
    </ul>
@endsection

@section('smart-content')
    <h2 class="title-2">
        Consumos
    </h2>
    <div class="container-4">
        <div class="card">
            <span style="font-size: 45px; font-weight:700;">
                Consumos
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-dots" width="50%"
                height="100%"  viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 3v18h18"/>
                <path d="M9 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M19 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M14 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M10.16 10.62l2.34 2.88" />
                <path d="M15.088 13.328l2.837 -4.586" />
            </svg>
        </div>
    </div>
@endsection



<style scoped>
    .item {
        background: transparent;
        width: 35%;
    }

    .card:hover {
        background: #ffffff;
        color: rgb(0, 0, 0);
        box-shadow: 7px 7px 5px #00000033;
    }

    .card:hover svg {
        background: #ffffff;

        color: rgb(0, 0, 0);
        stroke: rgb(0, 0, 0)
    }


    .title-2 {
        margin: 0px 10px 15px 10px;
        display: flex;
        justify-content: space-between;
        align-items: baseline;
    }

    .container-4 {
        height: 85%;
    }

    .card {
        padding: 20px;
        border: 1px solid #ccc;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: #EFEFEF;
        border-radius: 7px;
        border: 3px solid #170F2D;
        box-shadow: 4px 3px 9px #0000001f;
        height: 109%;

    }

    /* Estilos adicionales para hacerlo responsive */
    @media (max-width: 768px) {
        .container {
            grid-template-columns: 1fr;
            /* Una sola columna en pantallas pequeñas */
            grid-template-rows: auto;
            /* Altura automática en pantallas pequeñas */
        }
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


    .menu-list-1 {
        color: #F68B1C !important;
        border-left: 6px solid #F68B1C !important;
        border-right: 1px solid #F68B1C !important;
        border-top: 1px solid #F68B1C !important;
        border-bottom: 1px solid #F68B1C !important;
    }
</style>


<style>
    .month {
        padding: 40px 30px;
        width: 90%;
        background: #F68B1C;
        text-align: center;
    }

    .month ul {
        margin: 0;
        padding: 0;
    }

    .month ul li {
        color: white;
        font-size: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .month .prev {
        float: left;
        padding-top: 10px;
    }

    .month .next {
        float: right;
        padding-top: 10px;
    }

    .weekdays {
        margin: 0;
        padding: 10px 0;
        background-color: #ddd;
        font-size: 10px;
        width: 90%;
    }

    .list-item {
        margin-left: 20px;
        cursor: pointer;
        margin-bottom: 10px
    }

    .list-space {
        display: flex;
        flex-direction: column;
        padding: 1px 0px 33px 40px;
    }

    .list-item:hover {
        color: orange
    }

    .weekdays li {
        display: inline-block;
        width: 13.6%;
        color: #666;
        text-align: center;
    }

    .days {
        padding: 10px 0;
        background: #ffffff;
        margin: 0px 0px 20px 0px;
        width: 90%;
    }

    .days li {
        list-style-type: none;
        display: inline-block;
        width: 12.6%;
        text-align: center;
        margin-bottom: 5px;
        font-size: 12px;
        color: #777;
    }

    * {
        box-sizing: border-box;
    }
        a{
         color: black   
        }

        a:hover{
            color: orange   
        }
    ul {
        list-style-type: none;
    }

    .days li .active {
        padding: 5px;
        background: #F68B1C;
        color: white !important
    }

    /* Add media queries for smaller screens */
    @media screen and (max-width:720px) {

        .weekdays li,
        .days li {
            width: 13.1%;
        }
    }

    @media screen and (max-width: 420px) {

        .weekdays li,
        .days li {
            width: 12.5%;
        }

        .days li .active {
            padding: 2px;
        }
    }

    @media screen and (max-width: 290px) {

        .weekdays li,
        .days li {
            width: 12.2%;
        }
    }
</style>
<script>
   setTimeout(() => {
    document.querySelector(".button1").addEventListener("click", function() {
        var x = document.querySelector(".general");
        console.log("hola");
        // Verificar el valor actual de la propiedad display
        var currentDisplay = x.style.display;

        // Alternar entre "flex" y "none" basado en el valor actual
        x.style.display = currentDisplay === "flex" ? "none" : "flex";
    });
}, 1000);

</script>

@extends('dashboard.layouts.smart')

@section('content')
    <ul class="list-space">
        <h1>
            Costos
        </h1>
        <span class=""
        style="display: flex;
    background-color: lightgray;
    color: black;
    padding: 5px 20px;
    width: max-content;
    border-radius:5px;
    margin: 10px 0px ">
        <i class='bx bxl-deezer'></i>Por piso
    </span>


    <span class=""
        style="display: flex;
    background-color: lightgray;
    color: black;
    padding: 5px 20px;
    width: max-content;
    border-radius:5px;
    margin: 20px 0px ">

        <i class='bx bx-objects-horizontal-right'></i>Por espacio
    </span>

        <span class=""
            style="    display: flex;
        background-color: #F68B1C;
        color: white;
        padding: 5px 20px;
        width: max-content;
        border-radius:5px">
            <i class='bx bx-signal-5'> </i>Por Aparato
        </span>
        <h1>Por Piso</h1>
        <div style="display: flex; flex-direction: column">
            <span class="list-item">Piso 1</span>
            <a href="{{ route('Costos') }}" class="list-item" style="text-decoration:none; color:orange">
                <span class="slash-active">Piso 2</span>
            </a>
            <span class="list-item">Piso 3</span>
            <span class="list-item">Piso 4</span>
        </div>

        <h1>Por Espacio</h1>
        <a href="{{ route('Costos') }}" class="list-item" style="text-decoration:none; color:black">
            <span class="slash-active">Habitacion 204</span>

        </a>

        <h1>Ver por fecha</h1>
        <a href="{{ route('Costos') }}" class="list-item" style="text-decoration:none; color:black">
            <span class="slash-active">Semana</span>
        </a>
            @include('dashboard.components.calendar')
    </ul>
@endsection
@section('smart-content')
    <div class="left-arrow" onclick="history.back()">
        <i class='bx bx-left-arrow-alt' style="color: white"></i>
    </div>
    <h2 class="title-2">
        COSTOS 
    </h2>
    <div class="container">
        <div class="card" style="    height: 94%;">
            <span style="font-size: 45px; font-weight:700;">
                
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-pie-2" width="600"
            height="600" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 3v9h9" />
            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
        </svg>
        </div>
    </div>
@endsection

<style scoped>
    .section-main {
        width: 100%;
        height: 98%;
        background-color: #ffffff !important;
        display: flex;
        justify-content: center;
    }

    .section {
        
        width: 98% !important;
        background: white;
    }

    #powerConsumptionChart1 {}

    .slash-active {
        color: orange
    }

    * {
        box-sizing: border-box;
    }

    ul {
        list-style-type: none;
    }

    #ctx4 {}

    .convencion {
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        width: 59%;
        justify-content: flex-start;
    }

    .bar-unit {
        width: 180px;
        background: #36a2eb;
        border-radius: 2px;
        border: 1px solid #36a3eb73;
        padding: 5px 10px;

    }

    .item {
        background: transparent;
        width: 35%;
    }

    .card:hover {
        background: #f68a1c;
        color: white;
        box-shadow: 7px 7px 5px #00000033;
    }

    .card:hover svg {
        background: #f68a1c;
        color: white;
        stroke: white
    }


    .title-2 {
        margin: 0px 10px 15px 10px;
        display: flex;
        justify-content: space-between;
        align-items: baseline;
    }

    .container-4 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 20px;
        height: 85%;
    }

    .container{
        height: 100%;
    width: 100% !important;
    display: flex;
    flex-direction: column;
    background-color: #ffffff !important;
    overflow: hidden;
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
        border-radius: 6px;
        padding: 31px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }


    .menu-list-1 {
        color: #F68B1C !important;
        border-left: 6px solid #F68B1C !important;
        border-right: 1px solid #F68B1C !important;
        border-top: 1px solid #F68B1C !important;
        border-bottom: 1px solid #F68B1C !important;
    }

    .list-item {
        margin-left: 20px;
        cursor: pointer;
        margin-bottom: 10px
    }

    .list-item:hover {
        color: orange !important
    }

    .list-space {
        display: flex;
        flex-direction: column;
        padding: 1px 0px 33px 40px;
    }

    table.redTable {
        border: 2px solid #17102D;
        background-color: #EEEEEE;
        width: 75%;
        text-align: center;
        border-collapse: collapse;
    }

    table.redTable td,
    table.redTable th {
        border: 1px solid #AAAAAA;
        padding: 3px 2px;
    }

    table.redTable tbody td {
        font-size: 13px;
        color: #333333;
    }

    table.redTable tr:nth-child(even) {
        background: #F5F5F5;
    }

    table.redTable thead {
        background: #17102D;
    }

    table.redTable thead th {
        font-size: 19px;
        font-weight: bold;
        color: #FFFFFF;
        text-align: center;
        border-left: 2px solid #17102D;
    }

    table.redTable thead th:first-child {
        border-left: none;
    }

    table.redTable tfoot {
        font-size: 13px;
        font-weight: bold;
        color: #FFFFFF;
        background: #17102D;
    }

    table.redTable tfoot td {
        font-size: 13px;
    }

    table.redTable tfoot .links {
        text-align: right;
    }

    table.redTable tfoot .links a {
        display: inline-block;
        background: #FFFFFF;
        color: #17102D;
        padding: 2px 8px;
        border-radius: 5px;
    }
</style>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 70%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/luxon"></script>






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

    .left-arrow {
        position: absolute;
        background: #f68b1c;
        font-size: 35px;
        padding: 10px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 50%;
        bottom: 120px;
        right: 50px;
        cursor: pointer;
        transition: 100ms linear;
    }

    .left-arrow:active {
        transform: scale(1.2)
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

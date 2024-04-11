@extends('dashboard.layouts.smart')
@section('content')
    <ul class="list-space">
        <h1>Por piso</h1>
        <span class="list-item">Piso 1</span>
        <a href="{{ route('Visualizacion') }}" class="list-item" style="text-decoration:none; color:black">
            <span class="">Piso 2</span>
        </a>
        <span class="list-item">Piso 3</span>
        <span class="list-item">Piso 4</span>
        <h2>Por espacio</h2>
        <span class="list-item">Habitacion 201</span>
        <span class="list-item">Habitacion 202</span>
        <a href="{{ route('habitacion2') }}" class="list-item" style="text-decoration:none; color:black">
            <span class="">Habitacion 203</span>
        </a>
        <a href="{{ route('habitacion') }}" class="list-item" style="text-decoration:none; color:black">
            <span class="">Habitacion 204</span>
        </a>
        <span class="list-item">Habitacion 205</span>
        <span class="list-item">Habitacion 206</span>
        <span class="list-item">Habitacion 207</span>
    </ul>
@endsection
@section('smart-content')
    <h2 class="title-2">
        Visualización - Estados visualización general aparatos ON/OFF-Piso 2-Habitación 203- 

    </h2>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <div id="interactive-map-section">
        <div class="box">
            <a href="{{route('Visualizacion')}}">
                <div class="left-arrow" >
                    <i class='bx bx-left-arrow-alt' style="color: white"></i>
                </div>
            </a>
           
            <div class="marker" id="marker01" style="background: white !important">
                <div class="marker-info">
                    <span>Aire acondicionado</span>
                    <button class="btn-interactive" onclick="alert('¡Has hecho clic en el botón!')">Apagar</button>
                    <button class="btn-interactive">Encender</button>
                </div>
            </div>
            <div class="marker-information" id="aire">
                <h2 class="marker-title">Aire Acondicionado <span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <span for="" style="font-size: 14px; margin-bottom:5px">Estado:</span>
                    <select name="" id="">
                        <option value="0">Encendido</option>
                        <option value="1">Apagado</option>
                    </select>

                    <span style="font-size: 14px; margin-top:10px"> Gasto energetico:<span
                        style="font-size: 12px;
color: green;
margin-top: 5px;
display: flex"> 54Kwh
                    </span></span>
                </ul>
            </div>



            <div class="marker" id="marker02" style="background: white !important">
                <div class="marker-info">Here is the description of the marker. You can put whatever text you want
                    in
                    here and it will stay above the marker.</div>
            </div>

            <div class="marker-information" id="sensor">
                <h2 class="marker-title">Sensor de movimiento <span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <span for="" style="font-size: 14px; margin-bottom:5px">Estado:</span>
                    <select name="" id="">
                        <option value="0">Encendido</option>
                        <option value="1">Apagado</option>
                    </select>

                    <span style="font-size: 14px; margin-top:10px"> Gasto energetico:<span
                        style="font-size: 12px;
color: green;
margin-top: 5px;
display: flex"> 54Kwh
                    </span></span>
                </ul>
            </div>

            <div class="marker" id="marker03" style="background: white !important">
                <div class="marker-info">Here is the description of the marker. You can put whatever text you want
                    in
                    here and it will stay above the marker.</div>
            </div>
            <div class="marker-information" id="tv">
                <h2 class="marker-title">television <span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <span for="" style="font-size: 14px; margin-bottom:5px">Estado:</span>
                    <select name="" id="">
                        <option value="0">Encendido</option>
                        <option value="1">Apagado</option>
                    </select>

                    <span style="font-size: 14px; margin-top:10px"> Gasto energetico:<span
                        style="font-size: 12px;
color: green;
margin-top: 5px;
display: flex"> 54Kwh
                    </span></span>
                </ul>
            </div>
            <div class="marker" id="marker04" style="background: white !important">
                <div class="marker-info">
                    <img width="175px"
                        src="https://th.bing.com/th/id/R.6201a9ddb991ef73f42e768f40fb1a0d?rik=D7mQ6yeg%2fe0UUg&pid=ImgRaw&r=0"
                        alt="">
                </div>
            </div>
            <div class="marker-information" id="bano" >
                <h2 class="marker-title">Iluminacion Baño <span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <span for="" style="font-size: 14px; margin-bottom:5px">Estado:</span>
                    <select name="" id="">
                        <option value="0">Encendido</option>
                        <option value="1">Apagado</option>
                    </select>

                    <span style="font-size: 14px; margin-top:10px"> Gasto energetico:<span
                        style="font-size: 12px;
color: green;
margin-top: 5px;
display: flex"> 54Kwh
                    </span></span>
                </ul>
            </div>
            <div style="    position: absolute;
            background-image: url(assets/img/termostato.png);
            width: 30px;
            height: 30px;
            background-size: contain;
            " id="marker05">

            </div>


            <div class="marker-information" id="sala">
                <h2 class="marker-title">Iluminacion sala <span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <span for="" style="font-size: 14px; margin-bottom:5px">Estado:</span>
                    <select name="" id="">
                        <option value="0">Encendido</option>
                        <option value="1">Apagado</option>
                    </select>

                    <span style="font-size: 14px; margin-top:10px"> Gasto energetico:<span
                        style="font-size: 12px;
color: green;
margin-top: 5px;
display: flex"> 54Kwh
                    </span></span>
                </ul>
            </div>
            <div class="marker" id="marker07" style="background: white">

            </div>

            <div class="marker-information" id="termostato">
                <h2 class="marker-title">Termostato <span class="close">X</span></h2>
                <ul style="display: flex; flex-direction:column; padding:0px 20px ">
                    <span for="" style="font-size: 14px; margin-bottom:5px">Estado:</span>
                    <select name="" id="">
                        <option value="0">Encendido</option>
                        <option value="1">Apagado</option>
                    </select>

                    <span style="font-size: 14px; margin-top:10px"> Gasto energetico:<span
                        style="font-size: 12px;
color: green;
margin-top: 5px;
display: flex"> 54Kwh
                    </span></span>
                </ul>
            </div>
         
        </div>
    </div>




    <div class="menu-devices">
        <div class="row" style=" padding: 15px 0px;   border-bottom: 1px solid lightgray;">
            Lista de dispositivos (10)
        </div>
        <div class="row">
            <div style="    display: flex;
                align-items: center;">
                <div class="img-item" style="background-image:url('assets/img/hotel.png')">
                </div>
                <span style=" ">
                    Luz habitacion
                </span>
            </div>

            <div style="    display: flex;
                align-items: center;">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bulb" width="36"
                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#17102d" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7" />
                    <path d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3" />
                    <path d="M9.7 17l4.6 0" />
                </svg>
            </div>
        </div>

        <div class="row">

            <div style="    display: flex;
                align-items: center;">
                <div class="img-item" style="background-image:url('assets/img/bathroom.png')">
                </div>
                <span style="    width: min-content;">
                    Iluminacion Baño
                </span>
            </div>

            <div style="    display: flex;
                 align-items: center;">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bulb" width="36"
                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#17102d" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7" />
                    <path d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3" />
                    <path d="M9.7 17l4.6 0" />
                </svg>
            </div>
        </div>

        <div class="row">
            <div style="    display: flex;
            align-items: center;">
                <div class="img-item" style="background-image:url('assets/img/television.png')">
                </div>
                <span style="    width: min-content;">
                    Tv Encendido
                </span>
            </div>
            <div style="    display: flex;
                 align-items: center;">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="36"
                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11" />
                </svg>
            </div>
        </div>

        <div class="row">
            <div style="    display: flex;
            align-items: center;">
                <div class="img-item" style="background-image:url('...')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-air-conditioning"
                        width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 16a3 3 0 0 1 -3 3" />
                        <path d="M16 16a3 3 0 0 0 3 3" />
                        <path d="M12 16v4" />
                        <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M7 13v-3a1 1 0 0 1 1 -1h8a1 1 0 0 1 1 1v3" />
                    </svg>
                </div>
                <span style="    width: min-content;">
                    Aire Acondicionado
                </span>
            </div>
            <div style="    display: flex;
                 align-items: center;">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="36"
                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11" />
                </svg>
            </div>
        </div>

        <div class="row">
            <div style="    display: flex;
            align-items: center;">
                <div class="img-item" style="background-image:url('..')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-temperature"
                        width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 13.5a4 4 0 1 0 4 0v-8.5a2 2 0 0 0 -4 0v8.5" />
                        <path d="M10 9l4 0" />
                    </svg>
                </div>
                <span style="    width: min-content;">
                    Temperatura:
                </span>
            </div>
            <div style="    display: flex;
                 align-items: center;">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="36"
                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11" />
                </svg>
            </div>
        </div>

        <div class="row">
            <div style="    display: flex;
            align-items: center;">
                <div class="img-item" style="background-image:url('...')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-fire-extinguisher"
                        width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 7a4 4 0 0 1 4 4v9a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1v-9a4 4 0 0 1 4 -4z" />
                        <path d="M9 16h6" />
                        <path d="M12 7v-3" />
                        <path d="M16 5l-4 -1l4 -1" />
                        <path d="M12 4h-3a3 3 0 0 0 -3 3" />
                    </svg>
                </div>
                <span style="    width: min-content;">
                    Deteccion de incendios
                </span>
            </div>
            <div style="    display: flex;
                 align-items: center;">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="36"
                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11" />
                </svg>
            </div>
        </div>

        <div class="row">
            <div style="    display: flex;
            align-items: center;">
                <div class="img-item" style="background-image:url('../assets/img/sensor3.png')">
                </div>
                <span style="    width: min-content;">
                    Sensor de movimiento
                </span>
            </div>
            <div style="    display: flex;
                 align-items: center;">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="36"
                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11" />
                </svg>
            </div>
        </div>

        <div class="row">
            <div style="    display: flex;
            align-items: center;">
                <div class="img-item" style="background-image:url('...')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-access"
                        width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                        <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                        <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                        <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                        <path d="M8 11m0 1a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1z" />
                        <path d="M10 11v-2a2 2 0 1 1 4 0v2" />
                    </svg>
                </div>
                <span style="    width: min-content;">
                    Sensor de apertura
                </span>
            </div>
            <div style="    display: flex;
                 align-items: center;">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="36"
                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11" />
                </svg>
            </div>
        </div>

        <div class="row">
            <div style="    display: flex;
            align-items: center;">
                <div class="img-item" style="background-image:url('...')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-school"
                        width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 10m-6 0a6 6 0 1 0 12 0a6 6 0 1 0 -12 0" />
                        <path d="M13.5 15h.5a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-1a2 2 0 0 1 2 -2h.5" />
                        <path d="M16 17a5.698 5.698 0 0 0 4.467 -7.932l-.467 -1.068" />
                        <path d="M10 10v.01" />
                        <path d="M20 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    </svg>
                </div>
                <span style="    width: min-content;">
                    Sensor de ruido
                </span>
            </div>
            <div style="    display: flex;
                 align-items: center;">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>

                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="36"
                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11" />
                </svg>
            </div>


        </div>

        <div class="row">
            <div style="    display: flex;
            align-items: center;">
                <div class="img-item" style="background-image:url('../assets/img/grifo-de-agua.png')">
                </div>

                <span style="    width: min-content;">
                    Sensor de agua
                </span>
            </div>
            <div style="    display: flex;
 align-items: center;">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="36"
                    height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M13 3l0 7l6 0l-8 11l0 -7l-6 0l8 -11" />
                </svg>
            </div>

        </div>

    </div>
    <script>
        window.onload = function() {
            var markers = document.getElementsByClassName('marker');

            for (var i = 0; i < markers.length; i++) {
                markers[i].addEventListener('click', function() {
                    this.style.background = this.style.background === 'orange' ? 'white' : 'orange';
                });
            }
        };
    </script>
@endsection

<style scoped>
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

    html {
        overflow: hidden
    }

    .container {
        background: white !important;

    }

    .menu-devices {
        background: rgb(255, 255, 255);
        position: absolute;
        height: 75%;
        width: 320px;
        top: 205px;
        right: 0px;
        padding: 25px;
        box-shadow: 0px 0px 3px #0003;
        overflow-y: auto;
    }


    #interactive-map-section #marker01 {
        left: 63% !important;
    bottom: 27% !important;
    position: absolute;
    transform: translateY(-50%) translateX(-50%);
    font-weight: 700;
    width: 15px;
    height: 96px;
    text-align: center;
    cursor: pointer;
    transition: all ease 0.3s;
    z-index: 2;
    box-shadow: 0 5px 10px -1px rgba(158, 100, 0, 0.4);
    border: 2px solid black;
    background: white;
    border-radius: 5px !important;

    }

    #interactive-map-section #marker03 {
        left: 12% !important;
        top: 52% !important;
    }

    #interactive-map-section #marker03 {
        left: 64% !important;
        top: 47% !important;
    }

    #interactive-map-section #marker04 {
        left: 55% !important;
    bottom: 1% !important;
    position: absolute;
    transform: translateY(-50%) translateX(-50%);
    font-weight: 700;
    width: 120px;
    height: 20px;
    text-align: center;
    cursor: pointer;
    transition: all ease 0.3s;
    z-index: 2;
    box-shadow: 0 5px 10px -1px rgba(158, 100, 0, 0.4);
    border-radius: 2px;
    border: 2px solid black;
    content: "" !important;
    border-radius: 5px;
    }

    #interactive-map-section #marker07 {
        left: 15% !important;
    bottom: 0% !important;
    position: absolute;
    font-weight: 700;
    border-bottom: 20px;
    cursor: pointer;
    transition: all ease 0.3s;
    z-index: 2;
    border-radius: 2px;
    background: transparent;
    width: 40px !important;
    height: 40px !important;
    box-shadow: 0 0 0 0 transparent !important;
    border-color: transparent;
    clip-path: polygon(0 0, 0% 100%, 100% 100%);
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
    .left-arrow{
    position: absolute;
    background: #f68b1c;
    font-size: 35px;
    padding: 10px;
    border: 1px solid rgb(255, 255, 255);
    border-radius: 50%;
    bottom: 10px;
    right: -80px;
cursor: pointer;
transition: 100ms linear;
}

.left-arrow:active{
    transform: scale(1.2)
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
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>

<style>
    .row {
        justify-content: space-between;
        padding: 25px 0px;
    }

    .invisible {
        height: 102% !important;
    }

    /* --- INTERACTIVE MAP --- */
    .btn-interactive {
        background: white;
        border: 1px solid white;
        border-radius: 2px;
    }

    * {
        font-family: 'Poppins', sans-serif;
    }

    section {
        background: #ececec;
    }

    #marker11 span {
        display: none;
    }

    #interactive-map-section {
        margin-top: 50px;
        display: flex;
        justify-content: center;
    }

    #interactive-map-section h2 {
        font-weight: 600;
        font-family: Poppins, Lato, sans-serif;
        margin-bottom: 20px;
        text-align: left;
    }

    #interactive-map-section h2::after {
        /*    content: "";
        display: block;
        width: 70px;
        height: 3px;
        background: #ffa100;
        margin-top: 20px; */
    }

    #interactive-map-section .map-title-text p {
        font-size: 16px;
        line-height: 1.9em;
    }

    #interactive-map-section .map-title-text {
        padding-top: 40px;
    }

    #interactive-map-section .box {
        width: 650px;
        height: 540px;

        background: url('/assets/img/habitacion203.png') no-repeat;
        background-size: contain;
        background-position: center;
        position: relative;
        margin-left: -15%;

    }

    /* Change color of markers */
    #interactive-map-section .marker,
    #interactive-map-section .marker-info,
    #interactive-map-section .marker-info::after,
    #interactive-map-section .marker::before {
        background: #ffa100;
        color: #fff;
    }
#aire{
    top: 56%;
    left: 46.5%;
}
#sala{
    top: 6%;
    left: 29.5%;
}
#tv{
    top: 15%;
    left: 52.5%;

}
#termostato{
    top: -28%;
    left: 48.5%;
}
#bano{
   
    top: 7%;
    left: 75.5%;

}

#sensor{
    top: 50%;
    left: 36.5%;
}
    #interactive-map-section .marker {
        position: absolute;
        transform: translateY(-50%) translateX(-50%);
        font-weight: 700;
        width: 20px;
        height: 20px;
        text-align: center;
        border-radius: 50%;
        cursor: pointer;
        transition: all ease 0.3s;
        z-index: 2;
        box-shadow: 0 5px 10px -1px rgba(158, 100, 0, 0.4);
        border: 2px solid black;
    }

    /*     #interactive-map-section .marker::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
        border-radius: 50%;
        transform: scale(0);
        animation: markerPulse 3s ease infinite;
    }

    #interactive-map-section #marker01::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
        border-radius: 0% !important;
        transform: scale(0);
        animation: markerPulse 3s ease infinite;
    }
 */
    @keyframes markerPulse {

        0%,
        20% {
            transform: scale(0);
            opacity: 1;
        }

        100% {
            transform: scale(2);
            opacity: 0;
        }
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

    #interactive-map-section #marker01 {
        left: 50%;
        bottom: 5%;
    }

    #interactive-map-section #marker02 {
        left: 79%;
        top: 47%;
    }

    #interactive-map-section #marker03 {
        left: 36% !important;
    top: 49% !important;
    }

    /*   #interactive-map-section #marker04 {
        left: 94%;
        bottom: 20%;
    } */

    #interactive-map-section #marker05 {
        left: 52%;
        bottom: 86%;
    }

    .img-item {
        background-image: url(assets/img/hotel.png);
        width: 40px;
        height: 40px;
        background-size: contain;
        margin: 0px 15px;
        background-repeat: no-repeat
    }

    .row {
        display: flex;
        align-items: center;
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
        z-index: 2;
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
        transform: translateY(-50%) translateX(-50%);
        font-weight: 700;
        width: 30px;
        height: 66px;
        text-align: center;
        cursor: pointer;
        transition: all ease 0.3s;
        z-index: 2;
        box-shadow: 0 5px 10px -1px rgba(158, 100, 0, 0.4);
        border-radius: 2px;
        border: 1px solid white;
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
        width: 140px;
        background: white;
        border: 1px solid;
        border-radius: 4px;
        position: absolute;
        top: -10%;
        left: 24.5%;
        z-index: 3;
        display: NONE
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
        left: 17px;
    }
</style>

<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 54px;
        height: 28px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #f68b1c;
        ;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #f68b1c;
        ;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>

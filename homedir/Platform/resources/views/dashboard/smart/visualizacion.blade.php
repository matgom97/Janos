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
        Visualización - Estados visualización general aparatos ON/OFF-Piso 2 
    </h2>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <div id="interactive-map-section">
        <div class="box">
            <div class="marker" id="marker01">
                {{--    <div class="marker-info">
                    Luz #0
                </div> --}}
            </div>

            <div class="marker" id="marker1011">
                {{--    <div class="marker-info">
                    Luz #0
                </div> --}}
            </div>

            <div class="marker" id="marker1022">
                {{--    <div class="marker-info">
                    Luz #0
                </div> --}}
            </div>

            <div class="marker" id="marker02">
                {{--     <div class="marker-info">Luz #1</div> --}}
            </div>

            <div class="marker" id="marker03">
                {{--    <div class="marker-info">Luz #2</div> --}}
            </div>

            <div class="marker" id="marker04">
                {{--     <div class="marker-info">Luz#3</div> --}}
            </div>


            <div class="marker" id="marker041">
                {{--     <div class="marker-info">Luz#3</div> --}}
            </div>

            <div class="marker" id="marker042">
                {{--     <div class="marker-info">Luz#3</div> --}}
            </div>

            <div class="marker" id="marker05">
                {{--    <div class="marker-info">Luz #5</div> --}}
            </div>
            <div class="marker" id="marker06">
                {{--  <div class="marker-info">Luz #6</div> --}}
            </div>

            <div class="marker" id="marker061">
                {{--  <div class="marker-info">Luz #6</div> --}}
            </div>

            <div class="marker" id="marker062">
                {{--  <div class="marker-info">Luz #6</div> --}}
            </div>

            <div class="" id="marker063">
                {{--  <div class="marker-info">Luz #6</div> --}}
                <h3 class="habitacion-name">HAB 201</h6>
            </div>

            <div class="" id="marker064">
                {{--  <div class="marker-info">Luz #6</div> --}}
                <h3 class="habitacion-name">HAB 205</h6>
            </div>

            <div class="" id="marker065">
                {{--  <div class="marker-info">Luz #6</div> --}}
                <h3 class="habitacion-name">HAB 206</h6>
            </div>

            <div class="" id="marker066">
                {{--  <div class="marker-info">Luz #6</div> --}}
                <h3 class="habitacion-name">HAB 207</h6>
            </div>

            <div class="" id="marker067">
                {{--  <div class="marker-info">Luz #6</div> --}}
                <h3 class="habitacion-name">HAB 202</h6>
            </div>

            <div class="marker" id="marker07">
                {{--   <div class="marker-info">Luz #7</div> --}}
            </div>

            <div class="marker" id="marker08">
                {{--    <div class="marker-info">Luz #8</div> --}}
            </div>

            <div class="marker" id="marker09">
                {{--       <div class="marker-info">Luz #9</div> --}}
            </div>

            <div class="marker" id="marker10">
                {{--   <div class="marker-info">Luz #10</div> --}}
            </div>

            <div class="marker" id="marker101">
                {{--   <div class="marker-info">Luz #10</div> --}}
            </div>

            <div class="marker" id="marker102">
                {{--   <div class="marker-info">Luz #10</div> --}}
            </div>

            <div class="marker" id="marker12">
                {{--     <div class="marker-info">Luz #12</div> --}}
            </div>
            <div class="marker" id="marker121">
                {{--     <div class="marker-info">Luz #12</div> --}}
            </div>
            <div class="marker" id="marker122">
                {{--     <div class="marker-info">Luz #12</div> --}}
            </div>
            <div class="marker" id="marker13">
                {{--      <div class="marker-info">Luz #13</div> --}}
            </div>

            <div class="marker" id="marker131">
                {{--      <div class="marker-info">Luz #13</div> --}}
            </div>

            <div class="marker" id="marker132">
                {{--      <div class="marker-info">Luz #13</div> --}}
            </div>
            <div class="marker" id="marker14">
                {{--   <div class="marker-info">Luz #14</div> --}}
            </div>
            <div class="marker" id="marker15">
                {{-- <div class="marker-info">Luz #15</div> --}}
            </div>
            <div class="marker" id="marker16">
                {{--   <div class="marker-info">Luz #16</div> --}}
            </div>
            <div class="marker" id="marker17">
                {{--     <div class="marker-info">Luz #17</div> --}}
            </div>

            <div class="marker" id="marker171" >
                {{--     <div class="marker-info">Luz #17</div> --}}
            </div>

            <div class="marker" id="marker172">
                {{--     <div class="marker-info">Luz #17</div> --}}
            </div>

            <div class="marker" id="marker18">
                {{--    <div class="marker-info">Luz #18</div> --}}
            </div>
            <div class="marker" id="marker19">
                {{--   <div class="marker-info">Luz #19</div> --}}
            </div>
            <div class="marker" id="marker20">
                {{--       <div class="marker-info">Luz #20</div> --}}
            </div>

            <div class="marker" id="marker21">
                {{--        <div class="marker-info">Luz #21</div> --}}
            </div>

            <div class="marker" id="marker22">
                {{--     <div class="marker-info">Luz #22</div> --}}
            </div>

            <div class="marker" id="marker23">
                {{--    <div class="marker-info">Luz #23</div> --}}
            </div>

            <div class="marker" id="marker24">
                {{--  <div class="marker-info">Luz #24</div> --}}
            </div>

            <div class="marker" id="marker25">
                {{--  <div class="marker-info">Luz #25</div> --}}
            </div>

            <div class="marker" id="marker26">
                {{--      <div class="marker-info">Luz #26</div> --}}
            </div>

            <a href="{{ route('habitacion') }}">
                <div class="" id="marker11">
                    {{--      <div class="marker-info"> Luz#11</div> --}}
                    <h3 class="habitacion-name">HAB 204</h6>
                </div>
            </a>
            <a href="{{ route('habitacion2') }}">

            <div class="" id="marker111">
                {{--            <div class="marker-info"> Luz#11</div> --}}
                <h3 class="habitacion-name" style="    width: 68% !important;">HAB 203</h6>
            </div>
<a href=""></a>
        </div>
      
    </div>
    <script>
        window.onload = function() {
            var markers = document.getElementsByClassName('marker');

            for (var i = 0; i < markers.length; i++) {
                markers[i].addEventListener('click', function() {
                    this.style.background = this.style.background === 'orange' ? 'lightgray' : 'orange';
                });
            }
        };
    </script>
@endsection



<style scoped>
    
    #marker063{
        position: absolute;
    left: 10%;
    bottom: 29%;

    }

    #marker064{
        position: absolute;
        left: 35%;
        bottom: 81%;
    }

    #marker065{
        position: absolute;
        left: 52%;
        bottom: 81%;
    }
    #marker066{
        position: absolute;
        left: 84%;
    bottom: 81%;
    }
    #marker067{
        position: absolute;
    left: 35%;
    bottom: 28%;
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
        height: 93% !important;
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
    /* --- INTERACTIVE MAP --- */
    .btn-interactive {
        background: white;
        border: 1px solid white;
        border-radius: 2px;
    }

    * {
        font-family: 'Poppins', sans-serif;
    }


    #marker11 span {
        display: none;

    }

    #interactive-map-section {
        margin-top: 50px;
    }

    #interactive-map-section h2 {
        font-weight: 600;
        font-family: Poppins, Lato, sans-serif;
        margin-bottom: 20px;
        text-align: left;
    }

    #interactive-map-section h2::after {
        content: "";
        display: block;
        width: 70px;
        height: 3px;
        background: #ffa100;
        margin-top: 20px;
    }

    #interactive-map-section .map-title-text p {
        font-size: 16px;
        line-height: 1.9em;
    }

    #interactive-map-section .map-title-text {
        padding-top: 40px;
    }
    .w20{
        width: 20%;
    }

    #interactive-map-section .box {
        width: 900px;
        height: 550px;
        margin: auto;
        
        background: url('/assets/img/floor-plan1.png') no-repeat;
        background-size: contain;
        background-position: center;
        position: relative;
    }

    /* Change color of markers */
    #interactive-map-section .marker,
    #interactive-map-section .marker-info,
    #interactive-map-section .marker-info::after,
    #interactive-map-section .marker::before {
        background: #ebebeb;
        color: #fff;
    }

    #interactive-map-section .marker {
        position: absolute;
        transform: translateY(-50%) translateX(-50%);
        font-weight: 700;
        width: 12px;
        height: 12px;
        text-align: center;
        border-radius: 50%;
        cursor: pointer;
        transition: all ease 0.3s;
        z-index: 999;
        border: 3px solid #17102d;

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

    /*     #interactive-map-section .marker::after {
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
 */
    #interactive-map-section #marker01 {
        left: 55.5%;
        bottom: 18.5%;
    }

    #interactive-map-section #marker1011 {
        left: 61.5%;
        bottom: 0.5%;
        border-radius: 5px;
        height: 10px;
        width: 45px;
    }

    #interactive-map-section #marker1022 {
        left: 63.9%;
    bottom: 12.5%;
    border-radius: 5px;
    height: 45px;
    width: 5px;

    }


    #interactive-map-section #marker02 {
        left: 7%;
        top: 52%;
    }

    #interactive-map-section #marker03 {
        left: 28%;
        top: 16%;
    }

    #interactive-map-section #marker04 {
        left: 89%;
        bottom: 21%;
    }

    #interactive-map-section #marker041 {
        left: 94.5%;
    bottom: 4%;
    border-radius: 5px;
    height: 10px;
    width: 45px;
    }


    #interactive-map-section #marker042 {
        left: 80%;
    bottom: 13%;
    border-radius: 5px;
    height: 45px;
    width: 5px;
    }


    #interactive-map-section #marker05 {
        left: 46%;
        bottom: 45%;
    }

    #interactive-map-section #marker06 {
        left: 14%;
        bottom: 22%;
    }

    #interactive-map-section #marker061 {
        left: 22.9%;
    bottom: 16%;
    border-radius: 5px;
    height: 45px;
    width: 5px;
    }

    #interactive-map-section #marker062 {
    left: 17%;
    bottom: 5.5%;
    border-radius: 5px;
    height: 10px;
    width: 45px;
}

    #interactive-map-section #marker07 {
        left: 24%;
        bottom: 45%;
    }

    #interactive-map-section #marker08 {
        left: 28%;
        bottom: 23%;
    }

    #interactive-map-section #marker09 {
        left: 57%;
        bottom: 45%;
    }

    #interactive-map-section #marker10 {
        left: 41%;
        bottom: 18.5%;
    }

    #interactive-map-section #marker101 {
        left: 34.5%;
    bottom: 0.5%;
    border-radius: 5px;
    height: 10px;
    width: 45px;
    }

    #interactive-map-section #marker102 {
        left: 32.5%;
    bottom: 12.5%;
    border-radius: 5px;
    height: 45px;
    width: 5px;
    }

    #interactive-map-section #marker12 {
        left: 39%;
        bottom: 72%;
    }

    #interactive-map-section #marker121 {
        left: 32%;
    bottom: 79%;
    border-radius: 5px;
    height: 45px;
    width: 10px;
    }

    #interactive-map-section #marker122 {
        left: 32%;
        bottom: 60%;
        border-radius: 5px;
        height: 45px;
        width: 5px;
    }

    #interactive-map-section #marker13 {
        left: 56%;
        bottom: 71%;
    }

    #interactive-map-section #marker131 {
        left: 63.5%;
    bottom: 70%;
    border-radius: 5px;
    height: 45px;
    width: 10px;
    }

    .habitacion-name {
        width: 118%;
        color: black;
        text-shadow: 0px 0px 3px white;
        margin-top: 2em;
    }

    #interactive-map-section #marker132 {
        left: 63.5%;
        bottom: 58%;
        border-radius: 5px;
        height: 45px;
        width: 5px;
    }

    #interactive-map-section #marker14 {
        left: 67%;
        bottom: 24%;
    }

    #interactive-map-section #marker15 {
        left: 75%;
        bottom: 24%;
    }

    #interactive-map-section #marker16 {
        left: 68%;
        bottom: 45%;

    }

    #interactive-map-section #marker17 {
        left: 88%;
        bottom: 74%;

    }

    #interactive-map-section #marker171 {
        left: 84%;
    bottom: 94%;
    border-radius: 5px !important;
    width: 45px;
    height: 10px;

    }

    #interactive-map-section #marker172 {
        left: 79%;
    bottom: 65%;
    border-radius: 5px !important;
    height: 45px;
    width: 5px;
    }


    #interactive-map-section #marker18 {
        left: 75%;
        bottom: 61%;
    }

    #interactive-map-section #marker19 {
        left: 68%;
        bottom: 61%;

    }

    #interactive-map-section #marker20 {
        left: 28%;
        bottom: 62%;

    }

    #interactive-map-section #marker21 {
        left: 91%;
        bottom: 45%;

    }

    #interactive-map-section #marker22 {
        left: 13%;
        bottom: 45%;

    }

    #interactive-map-section #marker23 {
        left: 19%;
        bottom: 61%;

    }

    #interactive-map-section #marker24 {
        left: 35%;
        bottom: 45%;

    }

    #interactive-map-section #marker25 {
        left: 9%;
        bottom: 61%;

    }

    #interactive-map-section #marker26 {
        left: 79%;
        bottom: 45%;

    }

    #interactive-map-section #marker27 {
        left: 68%;
        bottom: 45%;

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
        position: absolute !important;
        transform: translateY(41%) translateX(-73%) !important;
        font-weight: 400 !important;
        width: 240px !important;
        height: 230px !important;
        text-align: center !important;
        cursor: pointer !important;
        transition: all ease 0.3s !important;
        z-index: 2 !important;
        left: 92% !important;
        bottom: 18% !important;
        clip-path: polygon(28% 20%, 28% 4%, 96% 4%, 96% 87%, 70% 87%, 70% 81%, 26% 80%, 26% 72%, 0 72%, 0 20%);
    }

    #marker111 {
        position: absolute !important;
        transform: translateY(41%) translateX(-73%) !important;
        font-weight: 400 !important;
        width: 221px !important;
        height: 230px !important;
        text-align: center !important;
        cursor: pointer !important;
        transition: all ease 0.3s !important;
        z-index: 2 !important;
        left: 66% !important;
        bottom: 18% !important;
        clip-path: polygon(66% 3%, 66% 19%, 97% 19%, 97% 72%, 78% 72%, 78% 94%, 1% 94%, 1% 70%, 1% 35%, 1% 3%);

    }

    #marker11:hover {
        border: 1px solid white !important;
        background: #ffa200c9;
        /* box-shadow: 0 5px 10px -1px rgba(158, 100, 0, 0.4) !important; */
    }

    #marker111:hover {
        border: 1px solid white !important;
        background: #0e00889f;
        box-shadow: 0 5px 10px -1px rgba(158, 100, 0, 0.4) !important;
    }


    #marker11:hover span {
        display: block;
        color: white;
    }

    #marker111:hover span {
        display: block;
        color: white;
    }
</style>

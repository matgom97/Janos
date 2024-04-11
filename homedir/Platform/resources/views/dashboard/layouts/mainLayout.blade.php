<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Janos 2.0</title>
    <link rel="icon" href="../assets/img/iconjanos3.png" type="image/x-icon">
    {{-- Icons boxs --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- Datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    {{-- Jquery --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <!-- Google Fonts CSS -->
    <style scoped>
        @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap");
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
</head>

<body>
    {{-- Container que define el tamaño total --}}
    <div class="main-container">
        {{-- Container  navbar y  body --}}
        <div class="container">
            {{-- navbar --}}
            @include('dashboard.components.banner', ['hotel' => $hotel])
            @include('dashboard.components.mainNavbar')
            {{-- body --}}
           <section style="overflow: auto;">
                @include('dashboard.components.mainSidebar')


                
             <!--   <content>
                    @yield('content')
                </content>-->
                @yield('section')
                @yield('alerts')
            </section> 
        </div>
        {{-- end container  --}}
    </div>
    {{-- end main-container  --}}
</body>

</html>

<style>
    .menu-button {
        display: flex;
        align-items: center;
    }

    .btn-sideicon-hover {
        background: transparent;
        border: none;
        cursor: pointer;
    }

    .icon-list {
        display: none;
        flex-direction: column;
        height: 70vh;
        margin-top: 78vh;
        transition: all 500ms linear 0s;
        background-color: darkblue;
        color: white;
        border: 2px;
        border-radius: 4px;
    }

    .btn-sideicon {
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 5px;
    }

    .btn-sideicon:hover {
        background-color: #f0f0f0;
        /* Cambiar el color de fondo al pasar el mouse */
    }

    .active {
        color: white !important;
        background-color: #ffffff ;
    }
</style>

<!-- All page CSS -->
<style scoped>
    :root {
        --primary-color: #F68B1C;
        --secondary-color: #17102d;
    }

    .btn-create {
        font-size: 15px !important;
    }


    * {
        font-family: "Outfit", sans-serif;
    }



    section {
        display: flex;
        width: 100%;
        height: 81%;
        padding-bottom: 0px !important;
    }

    .text-banner {
        padding: 1% 0px;
        height: 80%;
        font-weight: 400 !important;
        width: 30%;

    }

    content {
        width: 23% !important;
        overflow-y: auto;
    }

    nav {
        height: 52px;
        background: var(--secondary-color);
        align-items: center;
        display: flex;
        justify-content: space-between;
        user-select: none;
        padding: 0px 30px 0px 0px;
    }

    html,
    body {
        margin: 0 !important;
        height: 100%;
        width: 100%;
    }

    .welcome-text {
        font-size: 30px;
        font-weight: 500;
    }

    sidebar {
        background: var(--secondary-color);
        width: 28%;
        display: flex;
        flex-direction: column;
    }

    logo {
        background-image: url(assets/img/logo-BMES-JANOS-v2-blanco-01.png);
        background-size: contain;
        width: 25%;
    height: 88%;
        background-repeat: no-repeat;
        background-position: center;
        margin: 5px;
    }

    .welcome-text {
        color: white;

    }

    .profile-settings {
        margin-left: 10px;
    }

    .addd {
        width: 55px !important;
        margin: 0px 5px !important;
        font-size: 20px
    }

    .search-input {
        border: 3px solid white;
        border-radius: 3px;
        margin-right: 10px;
        font-weight: 500;
        width: 35%;
    }

    .user-div {
        color: white;
        display: flex;
        align-items: center;
        margin: 0px 5px;
        border-radius: 5px;
        padding: 2px 10px 2px 10px;
        border: 1px solid transparent;
        cursor: pointer;
    }

    .user-div:hover {
        border: 1px solid rgba(255, 255, 255, 0.11);
        background: #ffffff18;
        user-select: none;

    }

    .user-photo {
        width: 32px;
        height: 32px;
        background-color: deepskyblue;
        border: 2px solid white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px 0px 0px 15px;
    }

    .city-lineart {
        background-image: url(assets/img/city3.svg);
        width: 845px;
        background-color: var(--primary-color);
        height: 99%;
        flex-direction: row-reverse;
        justify-content: space-between;
        background-size: cover;
        display: flex;
        background-position-y: 45%;
    }

    .nav-item {
        color: white;
        width: 80px;
        background-color: transparent;
        height: 45px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 4px 5px !important;
        box-shadow: 0px 0px 4px #8b8b8b33;

        transition: 300ms linear;
    }

    .nav-item-plus {
        color: white;
        background-color: var(--secondary-color);
        border: 2px solid white;
        height: 35px;
        border-radius: 5px;
        justify-content: center;
        margin: 0px 5px;
        box-shadow: 2px 2px 2px #ffffff29;
        transition: 300ms linear;
        width: 50px !important;
        display: flex;
        align-items: center;
    }

    /* dropdown */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #17112dd4;
        min-width: 217px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        right: 17px;
        border-radius: 6px;
        border: 1px solid white;
        color: white;
        margin: 7px 0px;
    }

    .dropdown-content a {
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        color: #ffffff;
        border: solid 0.5px transparent;
        display: flex;

    }

    .dropdown-content a:hover {
        background-color: #17112dd4;
        border: 0.5px solid rgb(255 255 255 / 12%);
        border-radius: 3px
    }


    /* dropdown */




    .side-item {
        color: white;
        border: 1px solid transparent;
        height: 45px;
        border-radius: 5px;
        margin: 15px 15px;
        transition: 180ms linear;
        width: 85% !important;
        display: flex;
        font-size: 22px;
        z-index: 2;
        cursor: pointer;
        user-select: none;
        align-items: center;
        padding: 0px 0px 0px 15px;
        box-shadow: 0px 0px 4px #8b8b8b33;
    }

    .side-item:hover {
        background-color: var(--primary-color);
        
    box-shadow: 2px 2px 2px #f68b1c8c;

    }

    .nav-item:hover {
        background-color: var(--primary-color);
        box-shadow: 2px 2px 2px #f68b1c8c;


    }

    .item-accordion {
        margin-left: 15px;
    }

    .close-sesion:hover {
        background-color: #ff000075 !important;
        border: 1px solid #ffffff00 !important;


    }

    .logo-hotel {
        background-image: url(assets/img/hotel-san-marcos-buenavista.jpg);
        background-size: cover;
        width: 130px;
        height: 130px;
        background-repeat: no-repeat;
        background-position: center;
        /* background-position-x: -46px; */
        margin: 5px 10%;
        border-radius: 50%;
    }

    banner {
        width: 100%;
        background-color: var(--primary-color);
        height: 150px;
        min-height: 150px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        box-shadow: 1px 1px 8px 0px #000000ad;
    }

    .main-container {
        background-color: #ececec;
        width: 100%;
        height: 100vh;

    }

    .container {
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        background-color: #ececec;
        overflow: hidden;
    }

    @media only screen and (max-width: 1200px) {
        .welcome-text {
            margin: 5px;
            font-size: 27px !important;

        }
    }


    @media only screen and (max-width: 1102px) {
        .welcome-text {
            font-size: 19px !important;
        }
    }

    /*  .side-item:hover {
        justify-content: flex-start;
        transition: 180ms linear;
        width: 235px !important;
        display: flex;
        align-items: center;

        margin-left: 200px;
        z-index: 2;
        position: relative;
        padding-left: 11px;
        border: 1px solid rgba(255, 255, 255, 0.288);
        background: linear-gradient(225deg, rgba(45, 38, 65, 1) 0%, rgba(23, 17, 45, 1) 73%);


    }

    .side-item:hover .item-accordion {
        transition: 250ms linear;
        margin-left: 10px !important;
        opacity: 1;
        display: block;
    }
 */
    .invisible {
        transition: opacity 0.3s ease;
    }
</style>


<!-- RESPONSIVE CSS STYLES -->

<style>
    @media (max-width:768px) {

        .logo-hotel {
            background-size: cover;
            width: 90px;
            height: 90px;
            background-repeat: no-repeat;
            background-position: center;
            margin: 5px 3%;
            border-radius: 50%;
            border: solid 4px wheat;
        }

        banner {
            width: 100%;
            background-color: var(--primary-color);
            height: 110px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            box-shadow: 1px 1px 8px 0px #000000ad;
            border-bottom: 3px solid white;
        }

        .city-lineart {
            background-image: url(assets/img/citybuildlineart.png);
            background-color: var(--primary-color);
            height: 99%;
            flex-direction: row-reverse;
            justify-content: space-between;
            background-size: cover;
            display: flex;
            background-position-y: 45%;
            display: contents;
            image-rendering: pixelated;
        }

        .user-div span {
            display: none;
        }

        .user-div {
            margin: 0px !important;
        }

        .user-photo {
            width: 32px;
            height: 32px;
            background-color: deepskyblue;
            border: 2px solid white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* margin: 0px 0px 0px 15px; */
        }

        .search-input {
            border: 3px solid white;
            border-radius: 3px;
            margin-right: 10px;
            font-weight: 500;
            width: 35%;
            display: none;
        }

        .text-banner {
            padding: 1% 0px;
            height: 80%;
            font-weight: 400 !important;
            width: 45%;
        }

        .welcome-text {
            font-weight: 600;
            margin: 15px 4px;
        }
    }
    #mySidebar{
        z-index: 999;
    }
</style>


<!-- SCRIPT PARA ABRIR MENU USUARIO-->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var button1 = document.getElementById("dropdown-button1");
        var button2 = document.getElementById("dropdown-button2");
        var content = document.getElementById("dropdown-content");

        // Función para alternar la visibilidad del contenido
        function toggleContent() {
            content.style.display = (content.style.display === "block") ? "none" : "block";
        }

        // Event listener para el primer botón
        button1.addEventListener("click", function(event) {
            event.stopPropagation(); // Evita que se cierre al hacer clic en el botón
            toggleContent();
        });

        // Event listener para el segundo botón
        button2.addEventListener("click", function(event) {
            event.stopPropagation(); // Evita que se cierre al hacer clic en el botón
            toggleContent();
        });

        // Cierra el menú desplegable cuando se hace clic fuera de él
        window.addEventListener("click", function(event) {
            if (event.target !== button1 && event.target !== button2 && event.target !== content) {
                content.style.display = "none";
            }
        });

    });
</script>


<!-- SCRIPT PARA ESCONDER LA SIDEBAR-->
  <script>
    /* JavaScript */
function openNav() {
    document.getElementById("mySidebar").style.width = "330px";
/*     document.getElementById("main").style.marginLeft = "250px"; */
}
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    }
</script> 

<!-- SCRIPT INICIALIZAR DATATABLES -->

<script>
    $(document).ready(function() {
        $('#myTable').DataTable(
            responsive = true,
           
            
        );
    });
</script>


<!-- SCRIPT PARA CUADROS EN MAPA INTERACTIVO -->

{{-- <script>
    $('.marker').click(function() {
        $(this).toggleClass('active').siblings().removeClass('active');
    });
</script>
 --}}



    


<script>
var closeButtons = document.querySelectorAll('.close');

for (var i = 0; i < closeButtons.length; i++) {
    closeButtons[i].addEventListener('click', function() {
        this.closest('.marker-information').style.display = 'none';
    });
}


</script>
@extends('dashboard.layouts.inicio')
@section('navadmin')
    active-nav
@endsection
@section('content')
    <div class="content-main">
        <a href="@yield('LinkListade')" class="menu-list " style="text-decoration: none">
            <button class="item-button menu-list-1" style="margin-top: 20px">
                @yield('Listade')
            </button>
        </a>
        <a href="@yield('LinkCreacionde')" class="menu-list  " style="text-decoration: none">
            <button class="item-button menu-list-2" style="margin-top: 10px">
                @yield('Creacionde')
            </button>
        </a>
    @yield('Lista')

    </div>
@endsection

@section('link1')
    {{ route('admin.listausuarios') }}
@endsection
@section('Icon1')
    <i class='bx bx-user-circle'></i>
@endsection
@section('Item1')
    Usuarios
@endsection


@section('link2')
    {{ route('admin.listahoteles') }}
@endsection
@section('Icon2')
    <i class='bx bx-building-house'></i>
@endsection
@section('Item2')
    Hoteles
@endsection

@section('link3')
    {{ route('admin.listapisos') }}
@endsection
@section('Icon3')
    <i class='bx bx-menu'></i>
@endsection
@section('Item3')
    Pisos
@endsection

@section('link4')
    {{ route('admin.listahabitaciones') }}
@endsection
@section('Icon4')
    <i class='bx bx-home-alt-2'></i>
@endsection
@section('Item4')
    Habitaciones
@endsection

@section('link5')
    {{ route('admin.listadispositivos') }}
@endsection
@section('Icon5')
    <i class='bx bx-devices'></i>
@endsection
@section('Item5')
    Dispositivos
@endsection

@section('side-item')
    <a href="
{{ route('admin.listaocupaicon') }}
" style="text-decoration: none">
        <div class="side-item">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="25" height="25"
                viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>
            <span class="item-accordion">
                Ocupacion
            </span>
        </div>
    </a>
@endsection



@section('section')
    <div class="section-main">
        <div class="section">
            @yield('admin-content')


        </div>
    </div>
@endsection


<style scoped>
    :root {
        --primary-color: #F68B1C;
        --secondary-color: #17102d;
    }

    .menu-list:hover .item-button {
        color: #F68B1C !important;
        border-left: 6px solid #F68B1C !important;
        border-right: 1px solid #F68B1C !important;
        border-top: 1px solid #F68B1C !important;
        border-bottom: 1px solid #F68B1C !important;
    }

    .section {
        width: 99%;
        background: white;
        height: 98%;
        border-radius: 6px;
        padding-bottom: 0px !important;

    }

    .section-main {
        width: 100%;
        height: 98%;
        background-color: #efefef;
        display: flex;
        padding: 10px;
        justify-content: center;
    }

    .content-main {
        width: 98%;
        height: 98%;
        background-color: #efefef;
        padding: 10px 10px;

    }

    .item-button {
        font-size: 20px;
        width: 92%;
        color: #17102d;
        background-color: #ffffff;
        border: 1px solid #17102d;
        border-radius: 4px;
        padding: 10px;
        border-left: 6px solid #17102d;
        box-shadow: 1px 1px 9px #0003;
        display: flex;

    }
</style>


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

    .active-nav{
        background: #f68b1c !important;
    }

    .progress.active:before {
        animation: progress 5s linear forwards;
    }

    .progress-success.active:before {
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



@section('alerts')

@if (Session::has('success'))
        <div class="toast active" id="successAlert">
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

   
    @if (session('error'))
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



<script>
document.addEventListener("DOMContentLoaded", function() {

    setTimeout(function() {
        var errorAlert = document.getElementById('errorAlert');
        if (errorAlert) {
            errorAlert.style.display = 'none';
        }
    }, 5000);

});
</script> 

<script>
document.addEventListener("DOMContentLoaded", function() {

    setTimeout(function() {
        var successAlert = document.getElementById('successAlert');
        if (successAlert) {
            successAlert.style.display = 'none';
        }
    }, 5000);
});

</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const button2 = document.querySelector("button");
    const toast2 = document.querySelector(".toast");
    let closeIcon = document.querySelector(".close");
    let progress = document.querySelector(".progress");

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
        toast2.classList.remove("active");

        setTimeout(() => {
            progress.classList.remove("active");
        }, 300);

        clearTimeout(timer11);
        clearTimeout(timer22);
    });
});

</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelector("button");
    const toast = document.querySelector(".toast");
    const closeIcon = document.querySelector(".close");
    const progress2 = document.querySelector(".progress-success");

    let timer1, timer2;

    button.addEventListener("click", () => {
        toast.classList.add("active");
        progress2.classList.add("active");

        timer1 = setTimeout(() => {
            toast.classList.remove("active");
        }, 5000); // 1s = 1000 milliseconds

        timer2 = setTimeout(() => {
            progress2.classList.remove("active");
        }, 5300);
    });

    closeIcon.addEventListener("click", () => {
        toast.classList.remove("active");

        setTimeout(() => {
            progress2.classList.remove("active");
        }, 300);

        clearTimeout(timer1);
        clearTimeout(timer2);
    });
});

</script>
    
@endsection
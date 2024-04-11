@extends('dashboard.layouts.inicio')
@section('navsmart')
active-nav
@endsection
@section('content')
    <div class="content-main">
    </div>
@endsection


@section('Icon1')
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hand-finger" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M8 13v-8.5a1.5 1.5 0 0 1 3 0v7.5" />
    <path d="M11 11.5v-2a1.5 1.5 0 1 1 3 0v2.5" />
    <path d="M14 10.5a1.5 1.5 0 0 1 3 0v1.5" />
    <path d="M17 11.5a1.5 1.5 0 0 1 3 0v4.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7a69.74 69.74 0 0 1 -.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47" />
  </svg>
@endsection

@section('Item1')
    Visualizacion 
@endsection
@section('link1')
{{route('Visualizacion')}}
@endsection



@section('Icon2')
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-dots" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#FFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M3 3v18h18" />
    <path d="M9 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
    <path d="M19 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
    <path d="M14 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
    <path d="M10.16 10.62l2.34 2.88" />
    <path d="M15.088 13.328l2.837 -4.586" />
  </svg>
@endsection

@section('Item2')
    Consumos
@endsection
@section('link2')
{{route('Consumos')}}
@endsection
@section('Icon3')
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-pie-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#FFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 3v9h9" />
    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
  </svg>
@endsection
@section('link3')
{{route('Costos')}}
@endsection
@section('Item3')
    Costos
@endsection
@section('Icon4')
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tool" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#FFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" />
  </svg>
@endsection

@section('Item4')
    Mantenimiento
@endsection

@section('Icon5')
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697" />
    <path d="M18 14v4h4" />
    <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2" />
    <path d="M8 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
    <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
    <path d="M8 11h4" />
    <path d="M8 15h3" />
  </svg>
@endsection

@section('side-item')
<div class="side-item">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#FFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
        <path d="M12 10l0 3l2 0" />
        <path d="M7 4l-2.75 2" />
        <path d="M17 4l2.75 2" />
      </svg>
    <span class="item-accordion">
        Notificaciones
    </span>
</div>

@endsection

@section('Item5')
    Reportes
@endsection

@section('section')
    <div class="section-main" style="height: max-content !important;">
        <div class="section"  style="height: max-content !important;">
            @yield('smart-content')


        </div>
    </div>
@endsection




<style scoped>
    :root {
        --primary-color: #F68B1C;
        --secondary-color: #17102d;
    }
    
      content{
    
    min-width: 387px !important;
    }


    .menu-list:hover .item-button{
        color: #F68B1C !important;
        border-left:6px solid #F68B1C !important;
        border-right:1px solid #F68B1C !important;
        border-top:1px solid #F68B1C !important;
        border-bottom:1px solid #F68B1C !important;
    }

    .section {
        width: 99%;
        background: white;
        height: 98%;
        border-radius: 6px;
    }

    .section-main {
        width: 100%;
        height: 98%;
        background-color: #efefef;
        display: flex;
        justify-content: center;
    }
.active-nav{
    background: #f68b1c !important;
}
    .content-main {
        width: 98%;
        height: 98%;
        background-color: #ffffff00;
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
     @media (max-width: 768px) {
        section {
    flex-direction: column;
    overflow: auto;
}

.left-arrow{
    font-size: 20px;

}
.welcome-text{
    width: 200px;
}
content{
    width: 93%;
    overflow-y: auto;
    display: flex;
    justify-content: center;
    min-height: 40%;
}
.convencion{
    width: 95%;
}
.section{
    height: 55% !important;
}
.decoration{
    min-width: 108% !important;
}
    }
</style>

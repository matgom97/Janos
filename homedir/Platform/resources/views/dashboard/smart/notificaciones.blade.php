@extends('dashboard.layouts.smart')

@section('smart-content')
    <h2 class="title-2">
        Funciones Generales
    </h2>
    <div class="container-4">
        {{-- <div class="card">
            <span style="font-size: 20px; font-weight:600;">
                Visualizacion ON/OFF                
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hand-finger" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#170F2D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 13v-8.5a1.5 1.5 0 0 1 3 0v7.5" />
                <path d="M11 11.5v-2a1.5 1.5 0 1 1 3 0v2.5" />
                <path d="M14 10.5a1.5 1.5 0 0 1 3 0v1.5" />
                <path d="M17 11.5a1.5 1.5 0 0 1 3 0v4.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7a69.74 69.74 0 0 1 -.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47" />
              </svg>
        </div> 
         --}}
      {{--   <div class="card"> 
            <span style="font-size: 20px; font-weight:600;">
            Consumos
            </span>

            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-dots" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#170F2D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 3v18h18" />
                <path d="M9 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M19 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M14 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M10.16 10.62l2.34 2.88" />
                <path d="M15.088 13.328l2.837 -4.586" />
              </svg>
        </div> --}}
      
      {{--   
        <div class="card">
            <span style="font-size: 20px; font-weight:600;">
            
            Costos
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-pie-2" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#170F2D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 3v9h9" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
              </svg>
        </div> --}}
        {{--    
        <div class="card">
            <span style="font-size: 20px; font-weight:600;">
            
            Mantenimiento de Equipos
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tool" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#170F2D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" />
              </svg>
        </div> --}}
        {{-- 
        <div class="card">
            <span style="font-size: 20px; font-weight:600;">
            
            reportes
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#170F2D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697" />
                <path d="M18 14v4h4" />
                <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2" />
                <path d="M8 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M8 11h4" />
                <path d="M8 15h3" />
              </svg>
        </div>
        --}}
        <div class="card">
            <span style="font-size: 20px; font-weight:600;">
            
            Notificaciones y alarmas
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#170F2D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                <path d="M12 10l0 3l2 0" />
                <path d="M7 4l-2.75 2" />
                <path d="M17 4l2.75 2" />
              </svg>
        </div> 
    </div>
@endsection



<style scoped>
    .item {
        background: transparent;
        width: 35%;
    }

    .card:hover{
        background: #f68a1c;
        color: white;
        box-shadow: 7px 7px 5px #00000033;
    }
    .card:hover svg{
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

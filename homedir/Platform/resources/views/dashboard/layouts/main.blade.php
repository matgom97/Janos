@extends('dashboard.layouts.mainLayout')
@section('navsmart')
active-nav
@endsection

@section('link1')
    {{ route('smart') }}
@endsection
@section('Icon1')
    <i class="bx bx-layer"> </i>
@endsection
@section('Item1')
    Smart
@endsection


@section('link2')
    {{ route('admin.listausuarios') }}
@endsection
@section('Icon2')
    <i class='bx bx-data'></i>
@endsection
@section('Item2')
    Data
@endsection

@section('link3')
    {{ route('admin.listausuarios') }}
@endsection
@section('Icon3')
    <i class="bx bx-extension"></i>
@endsection
@section('Item3')
    Administración
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
        <center>
            <img src ="assets/img/logo-BMES-JANOS-v2-blanco-01.png" class="img-welcome"><img>
        </center>

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

  .img-welcome{
        max-width: 50%;
        height: 50%;
    }


    .menu-list:hover .item-button{
        color: #F68B1C !important;
        border-left:6px solid #F68B1C !important;
        border-right:1px solid #F68B1C !important;
        border-top:1px solid #F68B1C !important;
        border-bottom:1px solid #F68B1C !important;
    }

    .section {
        width: 50%;
        /* height: 50% !important; */
        background: #170f2d;
        /* height: 98%; */
        border-radius: 6px;
        display: flex;
        /* align-content: center; */
        justify-content: center;
        align-items: center;
        padding: 10%;
    }

    .section-main {
        width: 100%;
        height: 98%;
        background-color: #efefef;
        display: flex;
        justify-content: center;
        top: 5%;
        position: relative;
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

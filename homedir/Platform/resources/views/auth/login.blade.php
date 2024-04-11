<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Janos 2.0</title>
    <link rel="icon" href="../assets/img/logo-BMES-JANOS-v2-blanco-01.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      </style>
</head>
{{--   @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

<body>
    <section>
        <div class="main-container">
            <div class="banner-form">
                <div class="banner-img">
                    <div class="img-logo">

                    </div>
                </div>
                <div class="banner-login">
                    <div class="img-logo-2">

                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
<h2>Inicia Sesion </h2>
<p>Tu hotel merece lo mejor. Inicia sesión en BMJANOS 2.0 y lleva la gestión de energía al siguiente nivel. </p>
                        <!-- Email Address -->
                        <div class="identificacion">
                            <x-input-label for="numero_identificacion" :value="__('Numero Identificacion')" />
                            <x-text-input placeholder="Identificacion" id="email" class=""
                                type="text" name="numero_identificacion" :value="old('numero_identificacion')" required autofocus
                                autocomplete="username" />
                            <x-input-error :messages="$errors->get('numero_identificacion')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4 password" >
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input placeholder="Contraseña" id="password" class="" type="password"
                                name="password" required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="" name="remember">
                                <span
                                    class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4 btn-container">
                           

                            <x-primary-button class="ml-3 btn-orange">
                                {{ __('Ingresar') }}
                            </x-primary-button>
                            @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<!-- Styles -->
<style>
    *{
        font-family: 'Poppins', sans-serif !important;
        color: #ffffff;
    }
    

    /* Cambia el color del placeholder del input */
::placeholder {
     color: #dd8f0054;
}

body{
    margin: 0px !important;

}

.btn-orange{
    color: #ffffff;
    font-size: 17px;
    font-weight: 500;
    background: #ff9800ad;
    border: 2px solid white;
    padding: 10px 60px;
    border-radius: 6px;
    margin-bottom:15px;
    cursor: pointer;
}
.btn-container{
    display: flex;
    flex-direction: column;
    margin: 20px 0px;
}

.btn-orange:hover{
    color: #ffffff;
    font-size: 17px;
    font-weight: 500;
    background: #d27e00ad;
    border: 2px solid white;
    padding: 10px 60px;
    border-radius: 6px;
}

    .main-container {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .identificacion{
        display: flex;
        flex-direction: column;
        padding: 8px 0px;
    }
    
    .password{
        display: flex;
        flex-direction: column;
        padding: 8px 0px;
    }

    .banner-img {
        width: 48%;
    background: transparent;
    height: 95%;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    input{
        padding: 10px;
    border-radius: 5px;
    border: 2px solid white;
    background: #ffffffa6;
    margin: 5px 0px;
    color: #dd8f0096;
    font-weight: 500;
    }
    form{
        width: 70%;
    }

    .img-logo {
    background-image: url(assets/img/logo-BMES-JANOS-v2-blanco-01.png);
    width: 59%;
    height: 50%;
    background-size: contain;
    background-repeat: no-repeat;

    }

    .banner-login {
        width: 50%;
    background: #f0f8ff00;
    border-left: 1px solid white;
    height: 95%;
    display: flex;
    align-items: center;
    justify-content: center;

    }

    .banner-form {
        /* From https://css.glass */
        
            background: rgb(0 0 0 / 34%);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(8.7px);
    -webkit-backdrop-filter: blur(8.7px);
    border: 1px solid rgba(255, 255, 255, 0.47);
    width: 97%;
    height: 95%;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    section {
        background: url(assets/img/bannerorange.jpg);
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;

    }

    body {
        width: 100%;
        height: 100vh;
    }
</style>


<style>
    .main-light {
        /*  background: radial-gradient(circle, #8c9eff36 0%, rgb(23 17 45 / 0%) 73%); */
        background: radial-gradient(circle, rgb(238 174 202 / 17%) 0%, rgb(148 187 233 / 24%) 100%);
        border-radius: 7px;
        color: #17102d;
        padding: 10px 30px;
        border: 1px solid #17102d5e;
    }
    .img-logo-2{
    display:none;

    }

    .info-delete-light {
        width: 40%;
        border: 1px solid #ff000038;
        border-radius: 6px;
        padding: 10px 30px;
        background: #ff000042;
        margin: 20px 0px;
    }

    .input-form-light {
        padding: 10px 10px !important;
        border-radius: 4px !important;
        border: 1px solid #17102d;
        font-size: 15px !important;
        color: #17102d !important;
        background: #2d264142 !important;
        margin: 10px 0px 20px 0px !important;
        width: 90% !important;
    }


    .btn-form-light {
        width: 20%;
        border-radius: 4px;
        padding: 8px 5px;
        font-size: 16px;
        margin: 10px 0px;
        color: #ececec;
        background: #17102d;
        border: none;
    }
</style>

<style>
    @media (max-width:430px)
   {
    .banner-login {
    width: 100%;
    background: #f0f8ff00;
    border-left: none !important; 
    height: 95%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.banner-img {
    width: 0%;
    background: transparent;
    height: 95%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.img-logo-2{
    background-image: url(assets/img/logo-BMES-JANOS-v2-blanco-01.png);
    width: 40%;
    height: 18%;
    background-size: contain;
    background-repeat: no-repeat;
    display:block;
}
   } 
</style>

@extends('dashboard.layouts.inicio')


@section('navbar-item')
    <h2 class="theme">
        <i class='bx bxs-sun'></i>
        <label class="switch">
            <input id="cambiarClasesBoton" type="checkbox" checked>
            <span class="slider round"></span>
        </label>

        <i class='bx bxs-moon'></i>
    </h2>
@endsection

@section('content')
    <div class="content-main">
        <button class="item-button" style="margin-top: 10px">
            Perfil
        </button>
    </div>
@endsection

@section('section')
    <div class="section-main">
        <div class="section">
            <div class="main " id="elemento" style="display: flex">
                <div style="width: 57%;
                border-right: 1px solid;
                margin-right: 3%;">
                    <header>
                        <h2 class="" style="">
                            {{ __('Informacion Personal') }}
                        </h2>

                        <p class="">
                            {{ __('Actualiza la informacion de perfil y tu correo electronico.') }}
                        </p>
                    </header>

                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>

                    <form method="post" action="{{ route('profile.update') }}" class="">
                        @csrf
                        @method('patch')

                        <div style="    display: flex;
                        flex-direction: column;">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class=" input-form" :value="old('name', $user->name)"
                                required autofocus autocomplete="name" />
                            <x-input-error class="" :messages="$errors->get('name')" />
                        </div>

                        <div style="    display: flex;
                        flex-direction: column;">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="  input-form"
                                :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error class="" :messages="$errors->get('email')" />

                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                <div>
                                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                        {{ __('Your email address is unverified.') }}

                                        <button form="send-verification"
                                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                </div>
                            @endif
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button class="btn-form">{{ __('Save') }}</x-primary-button>

                            @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400 alert-success">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>


                <div class="info-delete">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Eliminar Cuenta') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar.') }}
                        </p>
                    </header>
                    <x-danger-button class="btn-delete" x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-danger-button>

                    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <hr>

                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Ingresa tu contraseña para eliminar tu cuenta') }}
                            </h2>


                            <div class=""
                                style="    display: flex;
                            flex-direction: column;">
                                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                                <x-text-input id="password" name="password" type="password" class="input-form"
                                    placeholder="{{ __('Password') }}" />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="input-form" />
                            </div>

                            <div class="mt-6 flex justify-end ">
                                <x-secondary-button class="btn-form" x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button class="ml-3 btn-delete">
                                    {{ __('Delete Account') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </div>

            </div>

            <div class="main " id="elemento" style="    margin: 20px 0px;">

                <header>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Cambiar Contraseña') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Asegúrese de que su cuenta utilice una contraseña larga y aleatoria para mantenerse segura.') }}
                    </p>
                </header>

                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    <div style="    display: flex;
                    flex-direction: column;">
                        <x-input-label for="current_password" :value="__('Current Password')" />
                        <x-text-input id="current_password" name="current_password" type="password"
                            class="mt-1 block w-full input-form" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    <div style="    display: flex;
                    flex-direction: column;">
                        <x-input-label for="password" :value="__('New Password')" />
                        <x-text-input id="password" name="password" type="password" class="input-form "
                            autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>

                    <div style="    display: flex;
                    flex-direction: column;">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" name="password_confirmation " type="password"
                            class="input-form" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button class="btn-form">{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'password-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<style scoped>
    :root {
        --primary-color: #F68B1C;
        --secondary-color: #17102d;
    }

    p{
        font-weight: 300 ; 
    }
    .alert-success {
        background: #00800085;
        border: 1px solid green;
        width: 85%;
        padding: 10px;
        border-radius: 4px;
    }

    .main {
        background: radial-gradient(circle, rgba(45, 38, 65, 1) 0%, rgba(23, 17, 45, 1) 80%);
        border-radius: 7px;
        color: rgb(255, 255, 255);
        padding: 10px 30px;

    }

    .info-delete {
        width: 40%;
        border: 1px solid #ff000038;
        border-radius: 6px;
        padding: 10px 30px;
        background: #412633;
        margin: 20px 0px;
    }

    .btn-delete {
        width: 42%;
        border-radius: 4px;
        border: 1px solid transparent;
        padding: 8px 5px;
        font-size: 16px;
        margin: 10px 0px;
        color: #ffffff;
        background: #DC2626;
    }

    
    .theme{
        display: flex;
    color: white;
    border: 1px solid rgba(255, 255, 255, 0);
  
    user-select: none;
    margin: 0px;
    align-items: center;
    border-radius: 6px;
    /* height: 36px; */
    width: 125px;
    justify-content: space-around;
    }

    .theme:hover{
        border: 1px solid rgba(255, 255, 255, 0.11);
    background: #ffffff18;
    }

    .btn-form {
        width: 20%;
        border-radius: 4px;
        padding: 8px 5px;
        font-size: 16px;
        margin: 10px 0px;
        color: #520152;
        background: white;
        border: none;
    }

    .btn-form:hover {
        background: #ffbbffa4;
        color: #ffffff;

    }

    .input-form {
        padding: 10px 10px !important;
        border-radius: 4px !important;
        border: 1px solid mediumpurple !important;
        font-size: 15px !important;
        color: white !important;
        background: #2d2641 !important;
        margin: 10px 0px 20px 0px !important;
        width: 90% !important;
    }

    .section {
        width: 99%;
        background: white;
        height: 95%;
        border-radius: 6px;
        padding: 20px;
        overflow-y: auto;
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
        background-color: #ffffff00;
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
        align-items: center;

    }
</style>
{{-- light Styles --}}
<style>
    .main-light {
       /*  background: radial-gradient(circle, #8c9eff36 0%, rgb(23 17 45 / 0%) 73%); */
        background: radial-gradient(circle, rgb(238 174 202 / 17%) 0%, rgb(148 187 233 / 24%) 100%);
        border-radius: 7px;
        color: #17102d;
        padding: 10px 30px;
        border: 1px solid #17102d5e;
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
        border: 1px solid #17102d ;
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
{{-- Switch Styles --}}
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 53px;
        height: 25px;
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
        height: 18px;
        width: 18px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Función para cambiar o restaurar las clases de un elemento
        function cambiarClasesElemento(elemento, clasesOriginales, clasesNuevas) {
            elemento.classList.remove(...clasesOriginales);
            elemento.classList.add(...clasesNuevas);
        }

        // Obtener los elementos que deseas cambiar de clase
        const mainElementos = document.querySelectorAll('.main');
        const btnFormElementos = document.querySelectorAll('.btn-form');
        const infoDeleteElementos = document.querySelectorAll('.info-delete');
        const infoFormElementos = document.querySelectorAll('.input-form');

        // Obtener el interruptor
        const switchElemento = document.getElementById('cambiarClasesBoton');

        // Agregar un evento change al interruptor
        switchElemento.addEventListener('change', function() {
            if (switchElemento.checked) {
                mainElementos.forEach(elemento => {
                    cambiarClasesElemento(elemento, ['main-light'], ['main']);
                });

                btnFormElementos.forEach(elemento => {
                    cambiarClasesElemento(elemento, ['btn-form-light'], ['btn-form']);
                });

                infoDeleteElementos.forEach(elemento => {
                    cambiarClasesElemento(elemento, ['info-delete-light'], ['info-delete']);
                });

                infoFormElementos.forEach(elemento => {
                    cambiarClasesElemento(elemento, ['input-form-light'], ['input-form']);
                });
            } else {
                mainElementos.forEach(elemento => {
                    cambiarClasesElemento(elemento, ['main'], ['main-light']);
                });

                btnFormElementos.forEach(elemento => {
                    cambiarClasesElemento(elemento, ['btn-form'], ['btn-form-light']);
                });

                infoDeleteElementos.forEach(elemento => {
                    cambiarClasesElemento(elemento, ['info-delete'], ['info-delete-light']);
                });

                infoFormElementos.forEach(elemento => {
                    cambiarClasesElemento(elemento, ['input-form'], ['input-form-light']);
                });
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

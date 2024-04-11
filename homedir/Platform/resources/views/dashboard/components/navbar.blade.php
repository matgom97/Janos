<nav>
    <div style="display: flex;">
        <div class="nav-item invisible-button addd" onclick="openNav()">
            <i class='bx bx-menu'></i>
        </div>
        <a style="text-decoration:none" href="{{ route('smart') }}">
        <div class="nav-item @yield('navsmart')">
            <i class="bx bx-layer"> </i>
            Smart
        </div>
        </a>
        <div class="nav-item @yield('navdata')">
            <i class='bx bx-data'></i>
            Data
        </div>

        <a style="text-decoration:none" href="{{ route('admin.listausuarios') }}">
            <div class="nav-item @yield('navadmin')">
                <i class="bx bx-extension"></i>
                Admin
            </div>
        </a>
        @yield('navbar-item')
    </div>
    <div class="dropdown">
        <div class="user-div" id="dropdown-button1">
            @yield('user-name')
            <span>
                {{$nombre}}
            </span>
            <div class="user-photo" id="dropdown-button2">
                @yield('user-acronym')
    {{ strtoupper(substr($nombre, 0, 1)) }}
            </div>
        </div>
        <div class="dropdown-content" id="dropdown-content">
            @if (Auth::check())
                <a href="{{ route('profile.edit') }}"> <i style="font-size:20px" class='bx bx-user-circle'></i>
                    <span class="profile-settings">
                        Mi perfil
                    </span>
                </a>
            @else
                <a href="#"> <i style="font-size:20px" class='bx bx-user-circle'></i>
                    <span class="profile-settings">
                        Mi perfil
                    </span>
                </a>
            @endif

            <a href="#"><i style="font-size:20px" class='bx bx-cog'></i>
                <span class="profile-settings">Configuracion</span>
            </a>

            @if (Auth::check())
                <form style="padding: 12px;
                margin: 0px;
                    border-radius:5px"
                    class="close-sesion" action="{{ route('logout') }}" method="post">
                    @csrf
                    <button
                        style="    color: white;
                background: transparent;
                border: none;
                font-size: 16px;
                display: flex;"
                        class="" type="submit"><i style="font-size:20px" class='bx bx-exit'></i>
                        <span class="profile-settings">
                            Cerrar sesion
                        </span>
                    </button>

                </form>
            @else
                <a class="close-sesion" href="{{ route('welcome') }}"><i style="font-size:20px" class='bx bx-exit'></i>
                    <span class="profile-settings">
                        Cerrar sesion
                    </span>
                </a>
            @endif
        </div>
    </div>


</nav>

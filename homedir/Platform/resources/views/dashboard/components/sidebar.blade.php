                       
            <!-- HTML -->
            <div id="mySidebar" class="sidebar">
                <div class="logo">
                    <!-- Logo en div ;) -->
                </div>
                <span href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</span>
                

                <a href="@yield('link1')" style="text-decoration:none">
                    <div class="side-item">
                        @yield('Icon1')
                        <span class="item-accordion">
                            @yield('Item1')
                        </span>
                    </div>
                </a>

                <a href="@yield('link2')" style="text-decoration:none">
                    <div class="side-item">
                        @yield('Icon2')
                        <span class="item-accordion">
                            @yield('Item2')
                        </span>
                    </div>
                </a>

                <a href="@yield('link3')" style="text-decoration:none">

                    <div class="side-item">
                        @yield('Icon3')
                        <span class="item-accordion">
                            @yield('Item3')
                        </span>
                    </div>
                </a>

                <a href="@yield('link4')" style="text-decoration:none">

                    <div class="side-item">
                        @yield('Icon4')
                        <span class="item-accordion">
                            @yield('Item4')
                        </span>
                    </div>
                </a>
                <a href="@yield('link5')" style="text-decoration:none">

                    <div class="side-item">
                        @yield('Icon5')
                        <span class="item-accordion">
                            @yield('Item5')
                        </span>
                    </div>
                </a>
                

                @yield('side-item')
            <!-- Este yield ayuda a que agregues items cuantos quieras :D -->
        
    

    </div>

    <style>
        .closebtn {
            color: white;
            padding: 15px;
            font-size: 30px;
            cursor: pointer;
        }

        #mySidebar {}

        .logo {
            background-image: url('../assets/img/logo-BMES-JANOS-v2-blanco-01.png');
            height: 200px;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            width: 200px;
            margin: auto;
        }

        /* CSS */
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #17102d;
            overflow-x: hidden;
            transition: 0.5s;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px15px;
            border: none;
        }
    </style>


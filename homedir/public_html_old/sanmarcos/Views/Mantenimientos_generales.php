<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<link media="screen" rel="stylesheet" type="text/css" href="../Templates/Css/styles.css">
	<link media="screen" rel="stylesheet" type="text/css" href="../Templates/Css/fonts.css">
	<link media="screen" rel="stylesheet" type="text/css" href="../Templates/Css/Bootstrap/bootstrap.min.css">
	<script src="../Templates/Js/bootstrap.min.js"></script>
	<script src="../Templates/Js/jquery.min.js"></script>
</head>

<body class="Home">
	<div class="container d-flex">
		<main class="">
			<div class="d-flex flex-column flex-shrink-0 overflow-hidden aside br-rad-15" style="width: 306px;">
				<div class=" p-3 bg-dt">
					<a href="Index.php" class="d-flex align-items-center text-white text-decoration-none">
						<img class="logo-aside" src="../Templates/Images/Resources/logo-JMS-JANOS.png">
					</a>
				</div>
				<div class="bg-white p-10" id="MenuAside">
					<ul class="nav nav-pills flex-column mb-auto color-bms mt-10" role="tablist">
						<li class="nav-item" role="presentation">
							<a id="Menu_Panel_de_control" type="button" class="nav-item nav-link drop" href="Panel_de_control.php">
								Panel de Control
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a id="Menu_Dispositivos" type="button" class="nav-item nav-link drop" href="Index.php">
								Smart Hotel
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a id="Menu_Estadisticas" class="nav-item nav-link drop hij" type="button" data-bs-toggle="collapse" href="#CollapseEstadisticas">
								Estadísticas
							</a>
							<ul class="collapse" id="CollapseEstadisticas" style="">
								<li class="nav-item">
									<a class="nav-link drop" type="button" id="Menu_btnGenerales1" href="Estadisticas_generales.php">
										Generales & Costos
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link drop" type="button" id="Menu_btnEspecificos1" href="Estadisticas_especificas.php">
										Específicos
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link drop" type="button" id="Menu_btnComparativos1" href="Estadisticas_comparativas.php">
										Comparativos
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item" role="presentation">
							<a id="Menu_Mantenimientos" class="nav-item nav-link drop hij active" data-bs-toggle="collapse" type="button" href="#CollapseMantenimientos" aria-expanded="false">
								Mantenimiento
							</a>
							<ul class="collapse show" id="CollapseMantenimientos" style="">
								<li class="nav-item">
									<a class="nav-link drop active" type="button" id="Menu_btnGenerales2" href="Mantenimientos_generales.php">
										Generales
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link drop" type="button" id="Menu_btnEquipos2" href="Mantenimientos_de_equipos.php">
										Equipos
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item" role="presentation">
							<a id="Menu_Usuario_E_Informacion" class="nav-item nav-link drop" type="button" href="Usuario.php">
								Usuario e información de la cuenta
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a id="Menu_Configuracion" class="nav-item nav-link drop" type="button" href="Configuracion.php">
								Configuración
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a id="btnExit" class="nav-link exit" type="button" href="Login.php">
								Salir
							</a>
						</li>
					</ul>
				</div>
			</div>
		</main>

		<div class="content">
			<div class="br-rad-15 bg-or overflow-hidden banner p-12">
				<div class="img-banner"></div>
				<div class="banner-contentinfo">
					<div style="padding: 0 15px;">
						<div class="" style="display: flex;flex-direction: row;align-items: center;">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="buscar" aria-label="search" aria-describedby="basic-addon1">
								<span class="bg-white input-group-text" id="basic-addon2"><img src="../Templates/Icons/search.svg"></span>
							</div>
							<div class="dataTime">
								<div style="border-right:1px solid #17112d;">
									<span class="" id="basic-addon2"><img src="../Templates/Icons/sun.svg"></span>
									<span>45º</span>
								</div>
								<div style="">
									<span class="" id="basic-addon2"><img src="../Templates/Icons/clock.svg"></span>
									<span id="MyClockDisplay" class="clock" onload="showTime()"></span>
								</div>
							</div>
						</div>
						<div class="Welcome-Banner">
							Bienvenido Hotel San Marcos
						</div>
						<div>
							<button class="bg-dt border-0 btn-newuser">
								ID_usuario /operativo/admin
							</button>
						</div>

					</div>
					<div class="logo-hotel">
						<div>
							<img src="../Templates/Images/Resources/descarga.jfif">
						</div>

					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg fixme" style="background: #17112d;">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<a class="navbar-brand" href="#"><img class="logo-aside" src="../Templates/Images/Resources/logo-JMS-JANOS.png"></a>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li style="margin: 10px 0;">
								<form class="d-flex" role="search">
									<input type="text" class="form-control" placeholder="buscar" aria-label="search" aria-describedby="basic-addon1">
									<button class="btn" type="submit"><span class="bg-white input-group-text" id="basic-addon2"><img src="../Templates/Icons/search.svg"></span></button>
								</form>
							</li>
							<li class="nav-item">
								<a id="Menu_Panel_de_controlz" type="button" class="nav-item nav-link drop" href="Panel_de_control.php">Panel de Control</a>
							</li>
							<li class="nav-item">
								<a id="Menu_Dispositivosz" type="button" class="nav-item nav-link drop" href="Index.php">Smart Hotel</a>
							</li>
							<li class="nav-item">
								<a id="Menu_Estadisticasz" class="nav-item nav-link drop hij" type="button" data-bs-toggle="collapse" href="#CollapseEstadisticasz" aria-expanded="true">
									Estadísticas
								</a>
								<ul class="collapse" id="CollapseEstadisticasz" style="">
									<li><a class="nav-link drop" type="button" id="Menu_btnGenerales1z" href="Estadisticas_generales.php">Generales</a></li>
									<li><a class="nav-link drop" type="button" id="Menu_btnEspecificos1z" href="Estadisticas_especificas.php">Específicos</a></li>
									<li><a class="nav-link drop" type="button" id="Menu_btnComparativos1z" href="Estadisticas_comparativas.php">Comparativos</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a id="Menu_Mantenimientosz" class="nav-item nav-link drop hij" data-bs-toggle="collapse" type="button" href="#CollapseMantenimientosz" aria-expanded="false">
									Mantenimiento
								</a>
								<ul class="collapse show" id="CollapseMantenimientosz" style="">
									<li><a class="nav-link drop active" type="button" id="Menu_btnGenerales2z" href="Mantenimientos_generales.php">Generales</a></li>
									<li><a class="nav-link drop" type="button" id="Menu_btnEquipos2z" href="Mantenimientos_de_equipos.php">Equipos</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a id="Menu_Usuario_E_Informacion" class="nav-item nav-link drop" type="button" href="Usuario.php">Usuario e información de la cuenta</a>
							</li>
							<li class="nav-item">
								<a id="Menu_Configuracion" class="nav-item nav-link drop" type="button" href="Configuracion.php">Configuración</a>
							</li>
							<li class="nav-item">
								<a id="Menu_Configuracion" class="nav-item nav-link drop" type="button" href="Login.php">Salir</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="content-principal tab-content" id="Principal">
				<div id="Panel_de_Control" class="chilContents tab-pane fade show active" role="tabpanel" aria-labelledby="Menu_Panel_de_control" tabindex="0">
					<h3 class="tittles-bms">Generales</h3>
					<div class="imgConstruction">
						<img src="../Templates/Images/Resources/imagen-construccion.png">
					</div>
				</div>

			</div>
		</div>
	</div>
	<script type="text/javascript">
		//--------------------------------------------------------------
		$("#MenuAside a").click(function(){
			var clases = "show active";
			var id = $(this).attr('id');
			var selector = $("div[aria-labelledby='"+id+"']");
			if (selector.length) {
				if (id === "Menu_Estadisticas" || id === "Menu_Mantenimientos") {
					var v1 = '';
					var v2 = '';
					if (!$(this).hasClass("active")) {
						if (this.id === 'Menu_Estadisticas') {
							v1 = 'Menu_Mantenimientos';
							v2 = 'CollapseMantenimientos'
						} else {
							v1 = 'Menu_Estadisticas';
							v2 = 'CollapseEstadisticas'
						};
						$("#" + v1).addClass("collapsed");
						$("#" + v2).removeClass("collapse show");
						$("#" + v2).addClass("collapsing");
						$("#" + v2).removeClass("collapsing");
						$("#" + v2).addClass("collapse");
					};
					if (!$(selector).hasClass(clases)) {
						$(".chilContents").removeClass(clases);
						$(selector).addClass(clases)
					};
				} else {
					if ( id === "Menu_Dispositivos") {
						$("#divconstruction").removeClass(clases);
						$("#pills-TabEstadis-tab").removeClass("show active");
						$("#pills-TabEstadis").removeClass("active");
						$("#pills-TabIlumin-tab").addClass("show active");
						$("#pills-TabIlumin").addClass(clases);
						$("#pills-tab").removeClass("d-none");
						mostrarconstruccion();
					} else if( id === "Menu_btnEspecificos1"){
						$(".chilContents").removeClass(clases);
						$("#pills-tab").removeClass("d-none fade");
						$("#Dispositivos").addClass(clases);
						$("#divconstruction").removeClass(clases);
						$("#pills-TabEstadis-tab").addClass("active");
						$("#pills-TabEstadis").addClass("show active");
						$("#pills-TabIlumin-tab").removeClass("show active");
						$("#pills-TabIlumin").removeClass(clases);
						return;
					};
				};
				mostrarconstruccion();
				if (!$(selector).hasClass(clases)) {
					$(".chilContents").removeClass(clases);
					$(selector).addClass(clases)
				};
				$("#MenuAside a.active").removeClass("active");
				$(this).addClass("active");
			} else{
				if (id === "Menu_Estadisticas" || id === "Menu_Mantenimientos") {
					var v1 = '';
					var v2 = '';
					if (!$(this).hasClass("active")) {
						$("#MenuAside a.active").removeClass("active");
						if (this.id === 'Menu_Estadisticas') {
							v1 = 'Menu_Mantenimientos';
							v2 = 'CollapseMantenimientos'
						} else {
							v1 = 'Menu_Estadisticas';
							v2 = 'CollapseEstadisticas'
						};
						$("#" + v1).addClass("collapsed");
						$("#" + v2).removeClass("collapse show");
						$("#" + v2).addClass("collapsing");
						$("#" + v2).removeClass("collapsing");
						$("#" + v2).addClass("collapse");;
						$("#" + id).addClass("active");
					};
				} 
			}
		});

        var fixmeTop = $('.fixme').offset().top; 
        $(window).scroll(function () {       
            var currentScroll = $(window).scrollTop(); 
            if (currentScroll >= fixmeTop) {
                $('.fixme').addClass("ret");
            } else { 
                $('.fixme').removeClass("ret")
            }
        });

		function showTime() {
			var date = new Date();
			var h = date.getHours(); // 0 - 23
			var m = date.getMinutes(); // 0 - 59
			var session = "AM";
			if (h == 0) {
				h = 12;
			};
			if (h > 12) {
				h = h - 12;
				session = "PM";
			};
			h = (h < 10) ? "0" + h : h;
			m = (m < 10) ? "0" + m : m;
			var time = h + ":" + m + " " + session;
			document.getElementById("MyClockDisplay").innerText = time;
			document.getElementById("MyClockDisplay").textContent = time;
			setTimeout(showTime, 1000);
		};
		showTime();

	</script>
</body>
</html>
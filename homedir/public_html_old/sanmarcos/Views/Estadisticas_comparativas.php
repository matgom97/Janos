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
							<a id="Menu_Estadisticas" class="nav-item nav-link drop hij active" type="button" data-bs-toggle="collapse" href="#CollapseEstadisticas">
								Estadísticas
							</a>
							<ul class="collapse show" id="CollapseEstadisticas" style="">
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
									<a class="nav-link drop active" type="button" id="Menu_btnComparativos1" href="Estadisticas_comparativas.php">
										Comparativos
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item" role="presentation">
							<a id="Menu_Mantenimientos" class="nav-item nav-link drop hij" data-bs-toggle="collapse" type="button" href="#CollapseMantenimientos" aria-expanded="false">
								Mantenimiento
							</a>
							<ul class="collapse" id="CollapseMantenimientos" style="">
								<li class="nav-item">
									<a class="nav-link drop" type="button" id="Menu_btnGenerales2" href="Mantenimientos_generales.php">
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
								<a id="Menu_Estadisticasz" class="nav-item nav-link drop hij " type="button" data-bs-toggle="collapse" href="#CollapseEstadisticasz" aria-expanded="true">
									Estadísticas
								</a>
								<ul class="collapse show" id="CollapseEstadisticasz" style="">
									<li><a class="nav-link drop " type="button" id="Menu_btnGenerales1z" href="Estadisticas_generales.php">Generales</a></li>
									<li><a class="nav-link drop" type="button" id="Menu_btnEspecificos1z" href="Estadisticas_especificas.php">Específicos</a></li>
									<li><a class="nav-link drop active" type="button" id="Menu_btnComparativos1z" href="Estadisticas_comparativas.php">Comparativos</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a id="Menu_Mantenimientosz" class="nav-item nav-link drop hij" data-bs-toggle="collapse" type="button" href="#CollapseMantenimientosz" aria-expanded="false">
									Mantenimiento
								</a>
								<ul class="collapse" id="CollapseMantenimientosz" style="">
									<li><a class="nav-link drop" type="button" id="Menu_btnGenerales2z" href="Mantenimientos_generales.php">Generales</a></li>
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

				<div id="Estadisticas_Generales" class="chilContents tab-pane fade show active" role="tabpanel" aria-labelledby="Menu_Dispositivos" tabindex="0">
					<section class="navsSwitch">
						<div class="textSeeFor">
							ver por:
						</div>
						<div class="seeFor" style="width: 100%;">
							<div>
								<ul class="nav nav-pills firstnav bg-dt nav overflow-hidden" id="pills-tabMenu" role="tablist">
									<li class="nav-item" role="presentation" style="max-width: 60px;">
										<button class="nav-link menuSuperiorDispo active" id="btnPisos" data-bs-toggle="pill" type="button" role="tab" aria-selected="true">
											<div>Piso</div>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link menuSuperiorDispo" id="btnHabitaciones" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" style="min-width: 100px;">
											<div>Habitación</div>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link menuSuperiorDispo" id="btnAireAcondicionado" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" style="min-width: 102px;">
											<div>Aire <br /> acondicionado</div>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link menuSuperiorDispo" id="btnTelevisor" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" style="min-width: 80px;">
											<div>Televisor</div>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link menuSuperiorDispo" id="btnIluHabitación" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" style="min-width: 100px;">
											<div>Iluminación habitación</div>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link menuSuperiorDispo" id="btnIluBa" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" style="min-width: 123px;">
											<div>Iluminación baño habitación</div>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link menuSuperiorDispo" id="btnOtrosEspacios" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" style="min-width: 100px;">
											<div>Otros <br />espacios</div>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link menuSuperiorDispo" id="btnHrsOfOnEquipos" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" style="min-width: 120px;">
											<div>Horas encendido <br /> apagado equipos</div>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link menuSuperiorDispo" id="btnTemperatura" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" style="min-width: 100px;">
											<div>Temperatura</div>
										</button>
									</li>
								</ul>
							</div>


							<ul class="nav nav-pills navFlow overflow-hidden" id="pills-tabPisoMenu" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link disabled" id="pills-TabPiso-tab1" data-bs-toggle="pill" data-bs-target="#pills-TabPiso" type="button" role="tab" aria-controls="pills-TabPiso" aria-selected="true">
										<div class="selectPiso">Piso 1</div>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="pills-TabPiso-tab2" data-bs-toggle="pill" data-bs-target="#pills-TabPiso" type="button" role="tab" aria-controls="pills-TabPiso" aria-selected="false">
										<div class="selectPiso">Piso 2</div>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link disabled" id="pills-TabPiso-tab3" data-bs-toggle="pill" data-bs-target="#pills-TabPiso" type="button" role="tab" aria-controls="pills-TabPiso" aria-selected="false">
										<div class="selectPiso">Piso 3</div>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link disabled" id="pills-TabPiso-tab4" data-bs-toggle="pill" data-bs-target="#pills-TabPiso" type="button" role="tab" aria-controls="pills-TabPiso" aria-selected="false">
										<div class="selectPiso">Piso 4</div>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link active	" id="btnComparativos" data-bs-toggle="pill" data-bs-target="#pills-TabPiso" type="button" role="tab" aria-controls="pills-TabPiso" aria-selected="false">
										<div id="btnComparativostexto" class="selectPiso">Comparativos</div>
									</button>
								</li>
							</ul>
						</div>
					</section>

					<section class="tab-content" id="pills-tabContent">
						<section class="tab-pane fade show active" id="pills-Tab1" role="tabpanel" aria-labelledby="pills-TabIlumin-tab" tabindex="0">
							<h3 class="tittles-bms"><span id="idpiso">Estadística comparativa de consumos eléctricos totales de habitaciones por pisos</span></h3>
							<div class="containerImagFlow tretre" style="">
								<div>
									<img src="../Templates/Images/Resources/hotel.png">
								</div>
								<div id="seccionImagenPlano" class="d-none">
									<img src="../Templates/Images/Mapa-piso-2/mapa-piso-2.png">
									<div id="areaselector" class="img8"> </div>
									<div id="areaselector2" class="img8 d-none"> </div>
								</div>
                                <div id="grafica" style=" max-width: 260px;">
									<img src="../Templates/Images/Resources/estadistica-referencia.png">
								</div>
								<div id="divTotales" class="d-none">
									<section id="TotalesPisos" class="d-none card-Total">
										<h3>Total consumo eléctrico hotel:</h3>
										<h1><img class="vvv" src="../Templates/Icons/energia-on.svg"><span id="IdTotalPiso">1370 KW/h</span></h1>
									</section>
									<section id="TotalesHab" class="d-none card-Total">
										<h3>Total consumo eléctrico actual habitaciones hotel:</h3>
										<h1><img class="vvv" src="../Templates/Images/Resources/habitacion.svg"><img class="vvv" src="../Templates/Icons/energia-on.svg"><span id="IdTotalHabitaciones">870 KW/h</span></h1>
									</section>
									<section id="TotalesAireA" class="d-none card-Total">
										<h3>Total consumo eléctrico actual aires acondicionados hotel:</h3>
										<h1><img class="vvv" src="../Templates/Images/Resources/aire-acondicionado.svg"><img class="vvv" src="../Templates/Icons/energia-on.svg"><span id="IdTotalAires">370 KW/h</span></h1>
									</section>
									<section id="TotalesTv" class="d-none card-Total">
										<h3>Total consumo eléctrico actual televisores hotel:</h3>
										<h1><img class="vvv" src="../Templates/Images/Resources/television.svg"><img class="vvv" src="../Templates/Icons/energia-on.svg"><span id="IdTotalTvs">90 KW/h</span></h1>
									</section>
									<section id="TotalesIlumHab" class="d-none card-Total">
										<h3>Total consumo eléctrico actual de las luminarias de las habitaciones del Hotel:</h3>
										<h1><img class="vvv" src="../Templates/Icons/bombillo-on.svg"><img class="vvv" src="../Templates/Icons/energia-on.svg"><span id="IdTotalIlumHab">1 KW/h</span></h1>
									</section>
									<section id="TotalesIlumBa" class="d-none card-Total">
										<h3>Total consumo eléctrico actual de las luminarias de los baños de las habitaciones del Hotel:</h3>
										<h1><img style="margin-bottom: -10px;" class="vvv" src="../Templates/Images/Resources/banao.svg"><img style="margin-right: -11px" class="vvv" src="../Templates/Icons/bombillo-on.svg"><img class="vvv" src="../Templates/Icons/energia-on.svg"><span id="IdTotalIlumBan">0.5 KW/h</span></h1>
									</section>
									<section id="TotalesOtrosEsp" class="d-none card-Total">
										<h3>Total consumo eléctrico actual de otros espacios fuera de las habitaciones del Hotel:</h3>
										<h1><img class="vvv" src="../Templates/Icons/energia-on.svg"><span id="IdTotalOtrosEsp">15 KW/h</span></h1>
									</section>
									<section id="TotalesTemp" class="d-none card-Total">
										<h3>Promedio general temperatura habitaciones hotel:</h3>
										<h1><img class="vvv" src="../Templates/Icons/temperatura.svg"><span id="IdTotalTemp">28ºC</span></h1>
									</section>
								</div>
								<!--<div class="ViewForRoom d-none">
									<ul class="d-none selecroom nav nav-pills flex-column mb-auto color-bms mt-10" id="pills-tabMenu-Room" role="tablist">
										<li class="" role="presentation">
											<button class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Habitación <span id="span1">201</span>
											</button>
										</li>
										<li class="" role="presentation">
											<button class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Habitación <span id="span2">202</span>
											</button>
										</li>
										<li class="" role="presentation">
											<button id="hab203" class="btnselectorroom nav-link drop text-min active" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Habitación <span id="span3">203</span>
											</button>
										</li>
										<li class="" role="presentation">
											<button id="hab204" class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Habitación <span id="span4">204</span>
											</button>
										</li>
										<li class="" role="presentation">
											<button class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Habitación <span id="span5">205</span>
											</button>
										</li>
										<li class="" role="presentation">
											<button class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Habitación <span id="span6">206</span>
											</button>
										</li>
										<li class="" role="presentation">
											<button class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Habitación <span id="span7">207</span>
											</button>
										</li>
									</ul>-->

									<!--<ul class="selecroom nav nav-pills flex-column mb-auto color-bms mt-10" id="pills-tabMenu-Flow" role="tablist">
										<li class="" role="presentation">
											<button id="btnpills-tabMenu-Flow1" class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Piso <span id="span1">1</span>
											</button>
										</li>
										<li class="" role="presentation">
											<button id="btnpills-tabMenu-Flow2" class="btnselectorroom nav-link drop text-min active" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Piso <span id="span2">2</span>
											</button>
										</li>
										<li class="" role="presentation">
											<button id="btnpills-tabMenu-Flow3" class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Piso <span id="span3">3</span>
											</button>
										</li>
										<li class="" role="presentation">
											<button id="btnpills-tabMenu-Flow4" class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Piso <span id="span4">4</span>
											</button>
										</li>
										<li class="" role="presentation">
											<button id="btn2Comparativos" class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true">
												Totales
											</button>
										</li>
									</ul>-->
								<!--</div>-->
							</div>
						</section>
					</section>

					<section id="sectionFinalgrafica">
						<h3 id="titulo" class="tittles-bms">
							<img id="icoH3" src="../Templates/Icons/energia-on.svg"><img style="margin-right: 0px;  margin-left: -10px; margin-top: -5px;" id="ico2" class="d-none" src="../Templates/Icons/bombillo-on.svg"><span id="textoGraficas">Estadística general</span>  <span id="especificPiso"></span>
						</h3>
						<div class="p-15-30 cont-graphs">
							  <canvas id="consumo-habitaciones"></canvas>
						</div>
					</section>
				</div>

			</div>
		</div>
	</div>
	<script type="text/javascript">
        $(document).ready(function () {
            const img = document.createElement("img");
            img.src = "../Templates/Icons/alerta-construccion.svg";
            $("#pills-tabPisoMenu .disabled").append(img);
		});

		var selectTab = 1;
		var textoMenuPiso = "Piso 2";
		$(".menuSuperiorDispo").click(function () {
			var disabled = false;
			var n = this.id;
			var title = "";
			var y = '';
			var ico = "";
			var ico2 = false;
			var cd = "d-none";
			var masobjetospormostrar = false;
			var menuhabitacion = false;
			var text = '';
			var textografica = "";
			var selectPiso = $("#pills-tabPisoMenu .active div").text();
			$("#areaselector2").removeClass();
			switch (n) {
				case 'btnPisos':
					disabled = true;
                    textografica = "Estadísticas general";
					ico = "../Templates/Images/Resources/habitacion.svg";
					selectTab = 1;
					y = '8';
					masobjetospormostrar = false;
					title = "consumo eléctrico ";
					break;
				case 'btnHabitaciones':
                    $("#pills-tabPisoMenu button").removeClass("active");
					$("#pills-TabPiso-tab2").addClass("active");
                    textografica = "Estadística comparativa de consumos eléctricos entre habitaciones ";
					ico = "../Templates/Images/Resources/habitacion.svg";
					selectTab = 2;
                    y = '8';
					masobjetospormostrar = false;
					title = "consumo eléctrico Habitación ";
					menuhabitacion = true;
					break;
				case 'btnAireAcondicionado':
                    textografica = "Estadística comparativa de consumos eléctricos entre los aires acondicionados de las habitaciones " ;
					ico = "../Templates/Images/Resources/aire-acondicionado.svg";
					selectTab = 3;
					y = '9-203';
					title = "consumo eléctrico Aires acondicionados ";
					$("#areaselector2").addClass("img9-204");
					masobjetospormostrar = true;
					break;
				case 'btnTelevisor':
                    textografica = "Estadística comparativa de consumos eléctricos entre los televisores de las habitaciones  " ;
					ico = "../Templates/Images/Resources/television.svg";
					selectTab = 4;
					y = '10-203';
					title = "consumo eléctrico televisores";
					$("#areaselector2").addClass("img10-204");
					masobjetospormostrar = true;
					break;
				case 'btnIluHabitación':
                    textografica = "Estadística comparativa de consumos eléctricos entre la iluminación de las habitaciones " ;
                    ico = "../Templates/Images/Resources/habitacion.svg";
					selectTab = 5;
					y = '11-203';
					$("#areaselector2").addClass("img11-204");
					title = "consumo eléctrico iluminación habitaciones ";
					masobjetospormostrar = true;
					break;
				case 'btnIluBa':
                    textografica = "Estadística comparativa de consumos eléctricos entre la iluminación de los baños de las habitaciones " ;
					ico = "../Templates/Images/Resources/banao.svg";
					ico2 = true;
					selectTab = 6;
					y = '12-203';
					$("#areaselector2").addClass("img12-204");
					masobjetospormostrar = true;
					title = "consumo eléctrico iluminación baño habitaciones ";
					break;
				case 'btnOtrosEspacios':
                    textografica = "Estadística comparativa de consumos eléctricos otros espacios fuera de las habitaciones " ;
					ico = "../Templates/Images/Resources/habitacion.svg";
					selectTab = 7;
					y = '13';
					title = "consumo eléctrico de otros espacios ";
					masobjetospormostrar = false;
					break;
                case 'btnHrsOfOnEquipos':
                    textografica = "Estadística comparativa de horas encendido y apagado de equipos por entre habitaciones " ;
                    ico = "../Templates/Icons/temperatura.svg";
                    selectTab = 8;
                    y = '8';
                    title = "temperaturas habitaciones ";
                    masobjetospormostrar = false;
                    break;
				case 'btnTemperatura':
                    textografica = "Estadística comparativa temperaturas entre habitaciones ";
					ico = "../Templates/Icons/temperatura.svg";
					selectTab = 8;
                    y = '8';
					title = "temperaturas habitaciones ";
					masobjetospormostrar = false;
					break;
			};
			if (disabled === true) {
				$("#pills-tabPisoMenu li button").addClass("disabled");
				$("#pills-tabPisoMenu li button").removeClass("active");
				$("#btnComparativos").addClass("active");
                $("#seccionImagenPlano").addClass("d-none");
                $("#grafica").removeClass("d-none");
			} else {
				$("#pills-tabPisoMenu li button").removeClass("disabled");
                $("#seccionImagenPlano").removeClass("d-none");
                $("#grafica").addClass("d-none");
			};

			$("#textoGraficas").text(textografica);

			if (ico2) {
				$("#ico2, #ico3, #ico21, #ico31").removeClass("d-none")
			} else {
				$("#ico2, #ico3, #ico21, #ico31").addClass("d-none")
			};
			$("#icoH3, #icoH31").attr("src", ico);
			if (masobjetospormostrar) {
				$("#areaselector2").removeClass(cd);
			} else {
				$("#areaselector2").addClass(cd);
			};

            if (selectPiso === "Comparativos") {
                selectPiso = ""
			};

            $("#especificPiso").text(selectPiso);
            $("#selectHab").text(title);
            $("#titleh3g").text(this.innerText);
            $("#areaselector").removeClass();
            $("#areaselector").addClass("img" + y);

			if ($("#btnComparativos").hasClass("active")) {

			};
		});

		//$("#pills-tabMenu-Flow .btnselectorroom").click(function () {
		//	let x = $(this).find("span").text();
		//	if (x === "") {
		//		$("#pills-tabPisoMenu button").removeClass("active");
		//		$("#btnComparativos").addClass("active");
		//		functionselectTotales(selectTab);
		//	} else{
		//		$("#seccionImagenPlano").removeClass("d-none");
		//		$("#divTotales").addClass("d-none");
		//		$(".selectPiso").removeClass("active");
		//		$("#pills-tabPisoMenu button").removeClass("active");
		//		$("#pills-TabPiso-tab"+ x).addClass("active");
		//		$("#idpiso").text($(this).text());
		//		$("#especificPiso").text($(this).text());
		//		textoMenuPiso = $(this).text();
		//	};
		//});

		$('#pills-tabMenu-Room .btnselectorroom').click(function () {
			let x = $(this).find("span").text();
			const y = x.charAt(x.length - 1);
			$("#selectHab").text("consumo eléctrico Habitación " + x);
			$(".spanEstadistHabEsp").text("habitación " + x);
			$("#areaselector").removeClass();
			$("#areaselector").addClass("img" + y);
		});

		$(".selectPiso").click(function () {
			var cont = 1;
			let x = $(this).text();
			if (x === "Totales") {
				$("#pills-tabPisoMenu button").removeClass("active");
				//$("#pills-tabMenu-Flow .btnselectorroom").removeClass("active");
				$("#btnComparativos").addClass("active");
				$("#btn2Comparativos").addClass("active");
				
                if (textoMenuPiso === "Comparativos") {
					textoMenuPiso = "";
                };
                $("#especificPiso").text(textoMenuPiso);
			} else {
				$("#sectionFinalTotales").addClass("d-none");
				$("#sectionFinalgrafica").removeClass("d-none");
				$("#seccionImagenPlano").removeClass("d-none");
				$("#divTotales").addClass("d-none");
				const y = x.charAt(x.length - 1);
				//$("#idpiso").text($(this).text());
				for (var i = 0; i < 8; i++) {
					$("#span" + cont.toString()).text(y.toString() + "0" + cont.toString());
					cont++;
				};
                textoMenuPiso = x;
                if (textoMenuPiso === "Comparativos") {
                    textoMenuPiso = "";
                };
                $("#especificPiso").text(textoMenuPiso);
			};

		});

		function functionselectTotales(r) {
			var d = "";
			var p = "";
			$("#titleh3g").text(d);
			$("#seccionImagenPlano").addClass("d-none");
			$("#divTotales").removeClass("d-none");
			$("#divTotales section").addClass("d-none");
			switch (selectTab) {
				case 1:
					p = "Estadística general consumo eléctrico de todo el Hotel";
					d = "Estadística general total consumo eléctrico del Hotel";
					$("#TotalesPisos").removeClass("d-none")
					break;
				case 2:
					p = "Estadística general consumo eléctrico de todas las habitaciones del Hotel";
					d = "Estadística general total consumo eléctrico de todas las habitaciones del Hotel";
					$("#TotalesHab").removeClass("d-none")
					break;
				case 3:
					p = "Estadística general consumo eléctrico de todos los aires acondicionados del Hotel";
					d = "Estadística general total consumo eléctrico de todos los aires acondicionadosdel Hotel";
					$("#TotalesAireA").removeClass("d-none")
					break;
				case 4:
					p = "Estadística general consumo eléctrico de todos los televisores del Hotel​";
					d = "Estadística general total consumo eléctrico de todos los televisores del Hotel";
					$("#TotalesTv").removeClass("d-none")
					break;
				case 5:
					p = "Estadística general consumo eléctrico de todas las luminarias del las habitaciones del Hotel";
					d = "Estadística general total consumo eléctrico de todas las luminarias de las habitaciones del Hotel";
					$("#TotalesIlumHab").removeClass("d-none")
					break;
				case 6:
					p = "Estadística general consumo eléctrico de todas las luminarias de los baños de las habitaciones del Hotel";
					d = "Estadística general total consumo eléctrico de todas las luminarias de los baños de las habitaciones del Hotel";
					$("#TotalesIlumBa").removeClass("d-none")
					break;
				case 7:
					p = "Estadísticas generales totales sumado todos los pisos";
					d = "Estadística general total consumo eléctrico de todas las luminarias de las habitaciones del Hotel";
					$("#TotalesOtrosEsp").removeClass("d-none")
					break;
				case 8:
					p = "Estadísticas generales de promedios de temperatura ";
					d = "Estadística general total consumo eléctrico de todas las luminarias de las habitaciones del Hotel";
					$("#TotalesTemp").removeClass("d-none")
					break;
			};
			//$("#idpiso").text(d);
			$("#TitTotales").text(p);
			$("#sectionFinalgrafica").addClass("d-none");
			$("#sectionFinalTotales").removeClass("d-none");

		};

		//--------------------------------------------------------------
		$("#MenuAside a").click(function () {
			var clases = "show active";
			var id = $(this).attr('id');
			var selector = $("div[aria-labelledby='" + id + "']");
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
					if (id === "Menu_Dispositivos") {
						$("#divconstruction").removeClass(clases);
						$("#pills-TabEstadis-tab").removeClass("show active");
						$("#pills-TabEstadis").removeClass("active");
						$("#pills-TabIlumin-tab").addClass("show active");
						$("#pills-TabIlumin").addClass(clases);
						$("#pills-tab").removeClass("d-none");
						mostrarconstruccion();
					} else if (id === "Menu_btnEspecificos1") {
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
			} else {
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

		$("#btnComparativostexto").click(function () {
            alert("programar hacer algo");
			$("#especificPiso").text("");
			
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
	<script src="consumoenpeso.js"></script>
    <script src="consumocomparativo.js"></script>
</body>
</html>
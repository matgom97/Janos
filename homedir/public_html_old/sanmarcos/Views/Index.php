<!DOCTYPE html>


<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<link media="screen" rel="stylesheet" type="text/css" href="../Templates/Css/styles.css">
	<link media="screen" rel="stylesheet" type="text/css" href="../Templates/Css/fonts.css">
	<link media="screen" rel="stylesheet" type="text/css" href="../Templates/Css/Bootstrap/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.3/dist/apexcharts.min.js"></script>
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
							<a id="Menu_Dispositivos" type="button" class="nav-item nav-link drop active" href="Index.php">
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
					<a class="navbar-brand" href="Index.php"><img class="logo-aside" src="../Templates/Images/Resources/logo-JMS-JANOS.png"></a>
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
								<a id="Menu_Dispositivosz" type="button" class="nav-item nav-link drop active " href="Index.php">Smart Hotel</a>
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
		</nav>
		<div class="content-principal tab-content" id="Principal">
			<div id="Dispositivos" class="chilContents tab-pane fade show active" role="tabpanel" aria-labelledby="Menu_Dispositivos" tabindex="0">
				<section class="navsSwitch">
					<div class="textSeeFor">
						ver por:
					</div>
					<div class="seeFor" style="width: 100%;">
						<div>
							<ul class="nav nav-pills firstnav bg-dt nav overflow-hidden" id="pills-tabMenu" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link menuSuperiorDispo active" id="pills-Tab1-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" onClick="FunctionSelectstions(this)">
										<div>Habitación</div>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link menuSuperiorDispo" id="pills-Tab2-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" onClick="FunctionSelectstions(this)">
										<div>Cuartos Técnicos</div>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link menuSuperiorDispo" id="pills-Tab3-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" onClick="FunctionSelectstions(this)">
										<div>Cuartos de Servicio</div>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link menuSuperiorDispo" id="pills-Tab4-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" onClick="FunctionSelectstions(this)">
										<div>Zonas Sociales</div>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link menuSuperiorDispo" id="pills-Tab5-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" onClick="FunctionSelectstions(this)">
										<div>Recepción</div>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link menuSuperiorDispo" id="pills-Tab6-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" onClick="FunctionSelectstions(this)">
										<div>Cocina</div>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link menuSuperiorDispo" id="pills-Tab7-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" onClick="FunctionSelectstions(this)">
										<div>Lavandería</div>
									</button>
								</li>
							</ul>
						</div>


						<ul class="nav nav-pills navFlow overflow-hidden" id="pills-tabPisoMenu" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link disabled" id="pills-TabPiso-tab1" data-bs-toggle="pill" data-bs-target="#pills-TabPiso" type="button" role="tab" aria-controls="pills-TabPiso" aria-selected="true" onClick="FunctionSelectstions(this)">
									<div class="selectPiso">Piso 1</div>
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="pills-TabPiso-tab2" data-bs-toggle="pill" data-bs-target="#pills-TabPiso" type="button" role="tab" aria-controls="pills-TabPiso" aria-selected="false" onClick="FunctionSelectstions(this)">
									<div class="selectPiso">Piso 2</div>
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link disabled" id="pills-TabPiso-tab3" data-bs-toggle="pill" data-bs-target="#pills-TabPiso" type="button" role="tab" aria-controls="pills-TabPiso" aria-selected="false" onClick="FunctionSelectstions(this)">
									<div class="selectPiso">Piso 3</div>
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link disabled" id="pills-TabPiso-tab4" data-bs-toggle="pill" data-bs-target="#pills-TabPiso" type="button" role="tab" aria-controls="pills-TabPiso" aria-selected="false" onClick="FunctionSelectstions(this)">
									<div class="selectPiso">Piso 4</div>
								</button>
							</li>
						</ul>
					</div>
				</section>

				<section class="tab-content" id="pills-tabContent">
					<section class="tab-pane fade show active" id="pills-Tab1" role="tabpanel" aria-labelledby="pills-TabIlumin-tab" tabindex="0">
						<h3 class="tittles-bms"><span id="idpiso">Piso 2</span>: <span id="titleh3g">Habitación</span> </h3>
						<div class="containerImagFlow" style="">
							<div>
								<img src="../Templates/Images/Resources/hotel.png">
							</div>
							<div id="seccionImagenPlano">
								<img src="../Templates/Images/Mapa-piso-2/mapa-piso-2.png">
								<div id="areaselector" class="img3"> </div>
							</div>
							<div id="Enconstruccioncosas" class="d-none">
								<img src="../Templates/Images/Resources/construccion-2.png" alt="Alternate Text" />
							</div>
							<div id="secciondehabitaciones" class="">
								<ul class="selecroom nav nav-pills flex-column mb-auto color-bms mt-10" id="pills-tabMenu" role="tablist">
									<li class="" role="presentation">
										<button class="btnselectorroom nav-link drop text-min disabled" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true" onClick="FunctionSelectstions(this)">
											Habitación <span id="span1">201</span>
										</button>
									</li>
									<li class="" role="presentation">
										<button class="btnselectorroom nav-link drop text-min disabled" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true" onClick="FunctionSelectstions(this)">
											Habitación <span id="span2">202</span>
										</button>
									</li>
									<li class="" role="presentation">
										<button class="btnselectorroom nav-link drop text-min active" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true" onClick="FunctionSelectstions(this)">
											Habitación <span id="span3">203</span>
										</button>
									</li>
									<li class="" role="presentation">
										<button class="btnselectorroom nav-link drop text-min" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true" onClick="FunctionSelectstions(this)">
											Habitación <span id="span4">204</span>
										</button>
									</li>
									<li class="" role="presentation">
										<button class="btnselectorroom nav-link drop text-min disabled" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true" onClick="FunctionSelectstions(this)">
											Habitación <span id="span5">205</span>
										</button>
									</li>
									<li class="" role="presentation">
										<button class="btnselectorroom nav-link drop text-min disabled" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true" onClick="FunctionSelectstions(this)">
											Habitación <span id="span6">206</span>
										</button>
									</li>
									<li class="" role="presentation">
										<button class="btnselectorroom nav-link drop text-min disabled" data-bs-toggle="pill" data-bs-target="#pills-Tab1" type="button" role="tab" aria-controls="pills-Tab1" aria-selected="true" onClick="FunctionSelectstions(this)">
											Habitación <span id="span7">207</span>
										</button>
									</li>
								</ul>

							</div>
						</div>
					</section>
				</section>

				<section>
					<h3 class="tittles-bms">
						<img src="../Templates/Images/Resources/habitacion.svg"> <span id="titleEstoFF" style="margin-right: 5px;">Estado on/off</span><span style="margin-right: 5px;">aparatos eléctricos</span><span id="titleh4g" style="margin-right: 5px;">Habitación</span> <span id="selectHab">203</span> <span id="temperatura"><img src="../Templates/Icons/temperatura-naranja.svg" class="temp" style="width: 25px;"></span>
						<ul class="nav nav-pills mb-3 navIluSta bg-dt nav overflow-hidden fade show" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="pills-TabIlumin-tab" data-bs-toggle="pill" data-bs-target="#pills-TabIlumin" type="button" role="tab" aria-controls="pills-TabIlumin" aria-selected="true">
									<span>Estados On - OFF</span>
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link " id="pills-TabEstadis-tab" data-bs-toggle="pill" data-bs-target="#pills-TabEstadis" type="button" role="tab" aria-controls="pills-TabEstadis" aria-selected="true" >
									<span>Estadísticas</span>
								</button>
							</li>

						</ul>
					</h3>

					<div class="tab-content" id="pills-tabContent">
						<div id="divconstruction" class="imgConstruction tab-pane fade" role="tabpanel" aria-labelledby="pills-TabConstruction" tabindex="0">
							<img src="../Templates/Images/Resources/imagen-construccion.png">
						</div>

						<div id="pills-TabIlumin" class="p-0-75 tab-pane fade show active" role="tabpanel" aria-labelledby="pills-TabIlumin-tab" tabindex="0">
							<div id="hab203" class="row">
								<div class="col-6 pad000">
									<div class="p-10-0-text">
										Muestra el estado de encendido y apagado de los equipos eléctricos por habitación en tiempo real.
										<ul id="apto203" class="views3d nav nav-pills flex-column mb-auto color-bms mt-10">
											<li class="nav-item ">
												<div style="display: flex;" class="nav-link drop " aria-current="page">
													<div class="col">
														<img class="ico-switcth1" src="../Templates/Images/Resources/cama.svg">
													</div>
													<div class="col-5">
														Iluminación Habitación
													</div>
													<div class="col-3">
														<div class="form-check form-switch">
															<input id="203-checkSwitch-1" class="form-check-input" type="checkbox" role="switch" onchange="Guarda_Estados(2031)")>
															<div>
																<span>off</span> <span>on</span>
															</div>
														</div>
													</div>
													<div class="col-2">
														<img id="203-imgicoswitch-1" class="icoswitchs" src="../Templates/Icons/bombillo-off.svg">
													</div>
												</div>
											</li>
											<li class="nav-item ">
												<div style="display: flex;" class="nav-link drop " aria-current="page">
													<div class="col">
														<img class="ico-switcth1" src="../Templates/Images/Resources/banao.svg">
													</div>
													<div class="col-5">
														Iluminación Baño
													</div>
													<div class="col-3">
														<div class="form-check form-switch">
															<input id="203-checkSwitch-2" class="form-check-input" type="checkbox" role="switch" onchange="Guarda_Estados(2032)">
															<div>
																<span>off</span> <span>on</span>
															</div>
														</div>
													</div>
													<div class="col-2">
														<img id="203-imgicoswitch-2" class="icoswitchs" src="../Templates/Icons/bombillo-off.svg">
													</div>
												</div>
											</li>
											<li class="nav-item ">
												<div style="display: flex;" class="nav-link drop " aria-current="page">
													<div class="col">
														<img class="ico-switcth1" src="../Templates/Images/Resources/television.svg">
													</div>
													<div class="col-5">
														Encendido TV
													</div>
													<div class="col-3">
														<div class="form-check form-switch">
															<input id="203-checkSwitch-3" class="form-check-input" type="checkbox" role="switch" onchange="Guarda_Estados(2033)">
															<div>
																<span>off</span> <span>on</span>
															</div>
														</div>
													</div>
													<div class="col-2">
														<img id="203-imgicoswitch-3" class="icoswitchs" src="../Templates/Icons/energia-off.svg">
													</div>
												</div>
											</li>
											<li class="nav-item ">
												<div style="display: flex;" class="nav-link drop " aria-current="page">
													<div class="col">
														<img class="ico-switcth1" src="../Templates/Images/Resources/aire-acondicionado.svg">
													</div>
													<div class="col-5">
														Encendido aire acondicionado
													</div>
													<div class="col-3">
														<div class="form-check form-switch">
															<input id="203-checkSwitch-4" class="form-check-input" type="checkbox" role="switch" onchange="Guarda_Estados(2034)">
															<div>
																<span>off</span> <span>on</span>
															</div>
														</div>
													</div>
													<div class="col-2">
														<img id="203-imgicoswitch-4" class="icoswitchs" src="../Templates/Icons/energia-off.svg">
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-6 brd-rar text-center">
									<div class="cont-img3d">
										<img id="imghab203">
									</div>
									<h5 class="sub-tit">
										Vista General 3D <span id="">habitación 203</span>
									</h5>
								</div>
							</div>

							<div id="hab204" class="row d-none">
								<div class="col-6 pad000">
									<div class="p-10-0-text">
										Muestra el estado de encendido y apagado de los equipos eléctricos por habitación en tiempo real.
										<ul id="apto204" class="views3d nav nav-pills flex-column mb-auto color-bms mt-10">
											<li class="nav-item ">
												<div style="display: flex;" class="nav-link drop " aria-current="page">
													<div class="col">
														<img class="ico-switcth1" src="../Templates/Images/Resources/cama.svg">
													</div>
													<div class="col-5">
														Iluminación Habitación
													</div>
													<div class="col-3">
														<div class="form-check form-switch">
														     <input id="204-checkSwitch-1" class="form-check-input" type="checkbox" role="switch" onchange="cambiarEstado1(this.checked ? 'on' : 'off', 'switch.node_23')">

															<div>
																<span>off</span> <span>on</span>
															</div>
														</div>
													</div>
													<div class="col-2">
														<img id="204-imgicoswitch-1" class="icoswitchs" src="../Templates/Icons/bombillo-off.svg">
													</div>
												</div>
											</li>
											<li class="nav-item ">
												<div style="display: flex;" class="nav-link drop " aria-current="page">
													<div class="col">
														<img class="ico-switcth1" src="../Templates/Images/Resources/banao.svg">
													</div>
													<div class="col-5">
														Iluminación Baño
													</div>
													<div class="col-3">
														<div class="form-check form-switch">
														     <input id="204-checkSwitch-2" class="form-check-input" type="checkbox" role="switch" onchange="cambiarEstado(this.checked ? 'on' : 'off')">

 
															<div>
																<span>off</span> <span>on</span>
															</div>
														</div>
													</div>
													<div class="col-2">
														<img id="204-imgicoswitch-2" class="icoswitchs" src="../Templates/Icons/bombillo-off.svg">
													</div>
												</div>
											</li>
											<li class="nav-item ">
												<div style="display: flex;" class="nav-link drop " aria-current="page">
													<div class="col">
														<img class="ico-switcth1" src="../Templates/Images/Resources/television.svg">
													</div>
													<div class="col-5">
														Encendido TV
													</div>
													<div class="col-3">
														<div class="form-check form-switch">
															<input id="204-checkSwitch-3" class="form-check-input" type="checkbox" role="switch" onchange="Guarda_Estados(2043)">
															<div>
																<span>off</span> <span>on</span>
															</div>
														</div>
													</div>
													<div class="col-2">
														<img id="204-imgicoswitch-3" class="icoswitchs" src="../Templates/Icons/energia-off.svg">
													</div>
												</div>
											</li>
											<li class="nav-item ">
												<div style="display: flex;" class="nav-link drop " aria-current="page">
													<div class="col">
														<img class="ico-switcth1" src="../Templates/Images/Resources/aire-acondicionado.svg">
													</div>
													<div class="col-5">
														Encendido aire acondicionado
													</div>
													<div class="col-3">
														<div class="form-check form-switch">
															<input id="204-checkSwitch-4" class="form-check-input" type="checkbox" role="switch" onchange="Guarda_Estados(2044)">
															<div>
																<span>off</span> <span>on</span>
															</div>
														</div>
													</div>
													<div class="col-2">
														<img id="204-imgicoswitch-4" class="icoswitchs" src="../Templates/Icons/energia-off.svg">
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-6 brd-rar text-center">
									<div class="cont-img3d">
										<img id="imghab204">
									</div>
									<h5 class="sub-tit">
										Vista General 3D <span id="">habitación 204</span>
									</h5>
								</div>
							</div>

						</div>

						<div id="pills-TabEstadis" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-TabEstadis-tab" tabindex="0">
							<p class="text-p">
								Las estadísticas especificas muestran el estado de consumo eléctrico por habitación y por aparato eléctrico.
							</p>
							<hr>
							<!-- ------------------------------------------------------------- -->
							
							<!-- ----------------
							<h5 class="sub-tit">
								<img src="../Templates/Icons/clock.svg">Horas de encendido / apagado de equipos eléctricos <span class="spanEstadistHabEsp">habitación 203</span>
							</h5>
							<div class="p-15-30 cont-graphs">
								<div class="div-prueba">
									div para borrar
								</div>
							</div>
							------- -->
							<!-- ------------------------------------------------------------- -->
							<h5 class="sub-tit">
								<img src="../Templates/Images/Resources/aire-acondicionado.svg">Consumo en KW/h de aire acondicionado <span class="spanEstadistHabEsp">habitación 203</span>
							</h5>
							<div class="p-15-30 cont-graphs" id="consumo203">
								<canvas id="powerConsumptionChart1"></canvas>
							</div>
							<!-- ------------------------------------------------------------- -->
						
							<h5 class="sub-tit">
								<img src="../Templates/Images/Resources/television.svg">Consumo en KW/h de T.V. <span class="spanEstadistHabEsp">habitación 203</span>
							</h5>
							<div class="p-15-30 cont-graphs">
							  
							  <canvas id="powerConsumptionChart2"></canvas> 
                                 
							</div>
						
							<!-- ------------------------------------------------------------- -->
							<h5 class="sub-tit">
								<img src="../Templates/Icons/bombillo-off.svg">Consumo en KW/h de iluminación <span class="spanEstadistHabEsp">habitación 203</span>
							</h5>
							<div class="p-15-30 cont-graphs">
							   
							<canvas id="chart1"></canvas>
							</div>
							<!-- ------------------------------------------------------------- -->
							<h5 class="sub-tit">
								<img src="../Templates/Icons/bombillo-off.svg">Consumo en KW/h de iluminación baño <span class="spanEstadistHabEsp">habitación 203</span>
							</h5>
							<div class="p-15-30 cont-graphs">
							 <canvas id="chart2" height="286" style="display: block; box-sizing: border-box; height: 260px; width: 520px;" width="572"></canvas>
							</div>
							<!-- ------------------------------------------------------------- -->
						
							<h5 class="sub-tit">
								<img src="../Templates/Icons/energia-off.svg">Consumo Total en KW/h <span class="spanEstadistHabEsp">habitación 203</span>
							</h5>
							<div class="p-15-30 cont-graphs">
								<canvas id="combinedChart"></canvas>
							</div>
						
							<!-- ------------------------------------------------------------- -->
							<h5 class="sub-tit">
								<img src="../Templates/Icons/temperatura.svg">Temperatura promedio <span class="spanEstadistHabEsp">habitación 203</span>
							</h5>
							<div class="p-15-30 cont-graphs">
								 <canvas id="grafica-temperatura"></canvas>
							</div>
						</div>
					</div>
				</section>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		numerohabitacion = $("#selectHab").text();
		let v1 = $("#" + numerohabitacion + "-checkSwitch-1").prop("checked");
		let v2 = $("#" + numerohabitacion + "-checkSwitch-2").prop("checked");
		let v3 = $("#" + numerohabitacion + "-checkSwitch-3").prop("checked");
		let v4 = $("#" + numerohabitacion + "-checkSwitch-4").prop("checked");
		entrar_habitacion(numerohabitacion, v1, v2, v3, v4);
		const img = document.createElement("img");
		img.src = "../Templates/Icons/alerta-construccion.svg";
		$("#pills-tabPisoMenu .disabled").append(img);
	});

	var SelectItem1 = "";
	var SelectItem2 = "";
	var SelectItem3 = "";

	var habitacionselect = "H0_B0_T0_A0";
	var numerohabitacion = "";

	

	$(".selectPiso").click(function () {
		var cont = 1;
		let x = $(this).text();
		const y = x.charAt(x.length - 1);
		$("#idpiso").text($(this).text());
		for (var i = 0; i < 7; i++) {
			$("#span" + cont.toString()).text(y.toString() + "0" + cont.toString());
			cont++;
		};
		var e = y.toString() + $("#selectHab").text().slice(1);
		$("#selectHab").text(e);
		$(".spanEstadistHabEsp").text("habitación " + y.toString() + $("#selectHab").text().slice(1));
		mostrarconstruccion();
	});

	function entrar_habitacion(number, H, B, T, A){
		var n = number;
		var boff = "../Templates/Icons/bombillo-off.svg";
		var bon = "../Templates/Icons/bombillo-on.svg";
		var toff = "../Templates/Icons/energia-off.svg";
		var ton = "../Templates/Icons/energia-on.svg";
		if (H === false) {
			H ="0";
			$("#"+ n +"-imgicoswitch-1").attr("src", boff);
		} else {
			H ="1";
			$("#"+ n +"-imgicoswitch-1").attr("src", bon);
		};
		if (B === false) {
			B ="0"
			$("#"+ n +"-imgicoswitch-2").attr("src", boff);
		} else {
			B ="1"
			$("#"+ n +"-imgicoswitch-2").attr("src", bon);
		};
		if (T === false) {
			T ="0"
			$("#"+ n +"-imgicoswitch-3").attr("src", toff);
		} else {
			T ="1"
			$("#"+ n +"-imgicoswitch-3").attr("src", ton);
		};
		if (A === false) {
			A ="0"
			$("#"+ n +"-imgicoswitch-4").attr("src", toff);
		} else {
			A ="1"
			$("#"+ n +"-imgicoswitch-4").attr("src", ton);
		};
		var text =  "H"+ H + "_B" + B + "_T" + T + "_A" + A;
		$("#imghab"+ n).attr("src", "../Templates/Images/Imagenes-habitacion/HAB_"+ n + "_" + text + ".png");
		habitacionselect = text;
	};

	function funcion_apagar_prender(obj){
		var boff = "../Templates/Icons/bombillo-off.svg";
		var bon = "../Templates/Icons/bombillo-on.svg";
		var toff = "../Templates/Icons/energia-off.svg";
		var ton = "../Templates/Icons/energia-on.svg"
		var n = obj.id.charAt(obj.id.length - 1);
		var x = true;
		if ($("#"+ numerohabitacion + "-checkSwitch-" + n).prop("checked")) {
			if (n === "1" || n === "2") {
				$("#"+ numerohabitacion +"-imgicoswitch-" + n).attr("src", bon);
			} else {
				$("#"+ numerohabitacion +"-imgicoswitch-" + n).attr("src", ton);
			};
		} else {
			if (n === "1" || n === "2") {
				$("#"+ numerohabitacion +"-imgicoswitch-" + n).attr("src", boff);
			} else {
				$("#"+ numerohabitacion +"-imgicoswitch-" + n).attr("src", toff);
			};
		};
	};

	function funcion_reemplazar_foto(obj){
		var hab = obj.id.substr(0,3);
		var n = obj.id.charAt(obj.id.length - 1);
		var ee = '0';
		var img = 'HAB_'
		if ($(obj).prop('checked')) {
			ee = '1'
		};
		switch (n) {
		case '1':
			habitacionselect = habitacionselect.substr(0,1) + ee + habitacionselect.substr(2);
			break;
		case '2':
			habitacionselect = habitacionselect.substr(0,4) + ee + habitacionselect.substr(5);
			break;
		case '3':
			habitacionselect = habitacionselect.substr(0,7) + ee + habitacionselect.substr(8);
			break;
		case '4':
			habitacionselect = habitacionselect.substr(0,10) + ee 
			break;
		};
		img = img + hab + "_" + habitacionselect;
		$("#imghab"+ hab).attr("src", "../Templates/Images/Imagenes-habitacion/" + img + ".png");
	};

	$("#203-checkSwitch-1, #203-checkSwitch-2, #203-checkSwitch-3, #203-checkSwitch-4, #204-checkSwitch-1, #204-checkSwitch-2, #204-checkSwitch-3, #204-checkSwitch-4").change(function () {
		funcion_apagar_prender(this);
		funcion_reemplazar_foto(this);
	});

	function FunctionSelectstions(x){
		SelectItem1 = $(".menuSuperiorDispo.active").find("div").text();
		SelectItem2 = $("#pills-tabPisoMenu > li > button.active").find("div").text();
		SelectItem3 = $(".btnselectorroom.active").find("span").text();

		$("#idpiso").text(SelectItem2);
		$("#titleh3g, #titleh4g").text(SelectItem1);
		$("#selectHab").text(SelectItem3);
		$(".spanEstadistHabEsp").text(SelectItem1 + " " + SelectItem3);
		if (SelectItem1 === "Habitación") {
			let x = SelectItem3;
			const y = x.charAt(x.length - 1);
			$("#areaselector").removeClass();
			$("#areaselector").addClass("img" + y);
			$("#selectHab").removeClass("d-none");
			$("#seccionImagenPlano").removeClass("d-none");
			$("#secciondehabitaciones").removeClass("d-none");
			$("#Enconstruccioncosas").addClass("d-none");
			if (SelectItem3 === "203" || SelectItem3 == "204") {
				numerohabitacion=SelectItem3;
				let v1 = $("#" + SelectItem3 + "-checkSwitch-1").prop("checked");
				let v2 = $("#" + SelectItem3 + "-checkSwitch-2").prop("checked");
				let v3 = $("#" + SelectItem3 + "-checkSwitch-3").prop("checked");
				let v4 = $("#" + SelectItem3 + "-checkSwitch-4").prop("checked");
				$("#pills-tab").removeClass("d-none");
				$("#pills-tab").addClass("show");
				$("#titleEstoFF").text("Estado on/off");
				$("#divconstruction, #pills-TabEstadis").removeClass("active show");
				$("#pills-TabIlumin").addClass("active show");
				entrar_habitacion(SelectItem3, v1, v2, v3, v4);
				$("#pills-TabIlumin-tab").addClass("active");
				$("#pills-TabEstadis-tab").removeClass("active");
				if (SelectItem3 === '203') {
					$("#hab203").removeClass("d-none");
					$("#hab204").addClass("d-none");
				} else if(SelectItem3 === '204'){
					$("#hab204").removeClass("d-none");
					$("#hab203").addClass("d-none");
				} else{
					
				};

			};

		} else {
			$("#seccionImagenPlano").addClass("d-none");
			$("#secciondehabitaciones").addClass("d-none");
			$("#Enconstruccioncosas").removeClass("d-none");
			$("#areaselector").addClass();
			$("#selectHab").addClass("d-none");
			$("#pills-tab").removeClass("show");
			$("#pills-TabEstadis, #pills-TabIlumin").removeClass("active show");
			$("#divconstruction").addClass("active show");
			$("#pills-tab").addClass("d-none");
		}
	};


	$("#pills-TabEstadis-tab").click(function(){
		$("#titleEstoFF").text("Estadística")
	});

	$("#pills-TabIlumin-tab").click(function(){
		$("#titleEstoFF").text("Estado on/off")
	});

	function mostrarconstruccion() {
		var n1 = SelectItem3;
		numerohabitacion = n1;

		if (n1 === '203' || n1 === '204') {
			$("#pills-tab").addClass("show");
			$("#divconstruction").removeClass("active show");
			$("#pills-TabIlumin").addClass("active show");
			$("#pills-TabEstadis-tab").removeClass("active");
			$("#pills-TabIlumin-tab").addClass("active");
			$("#pills-tab").removeClass("d-none");
			let v1 = $("#" + n1 + "-checkSwitch-1").prop("checked");
			let v2 = $("#" + n1 + "-checkSwitch-2").prop("checked");
			let v3 = $("#" + n1 + "-checkSwitch-3").prop("checked");
			let v4 = $("#" + n1 + "-checkSwitch-4").prop("checked");
			entrar_habitacion(n1, v1, v2, v3, v4);
			$("#pills-tab").removeClass("show");
			$("#pills-TabEstadis, #pills-TabIlumin").removeClass("active show");
			$("#divconstruction").addClass("active show");
			$("#pills-tab").addClass("d-none");
		};
	};

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


//A partir de aqui se guardan los estados de cada dispositivo JJZP

function Guarda_Estados(bms_device){
 
  switch (bms_device) {
      //Piso 2 Habitacion 203
      
      case 2031: //SW luz Habitacion 203
    	  var sw_estado = document.getElementById('203-checkSwitch-1').checked ? 1: 0;
    	  var bms_datos="num_piso="+2+"&num_hab="+203+"&nom_disp="+"Int Habitacion 203"+"&estado="+sw_estado;
    	  break;
      case 2032: //SW luz baño habitacion 203
      	  var sw_estado = document.getElementById('203-checkSwitch-2').checked ? 1: 0;
    	  var bms_datos="num_piso="+2+"&num_hab="+203+"&nom_disp="+"Int Baño 203"+"&estado="+sw_estado;
    	  break;
      case 2033://Contacto TV Habitacion 204
     	  var sw_estado = document.getElementById('203-checkSwitch-3').checked ? 1: 0;
    	  var bms_datos="num_piso="+2+"&num_hab="+203+"&nom_disp="+"Contacto Seco TV 203"+"&estado="+sw_estado; 
    	  break;	  
      case 2034://Contacto Aire Habitacion 204
      	  var sw_estado = document.getElementById('203-checkSwitch-4').checked ? 1: 0;
    	  var bms_datos="num_piso="+2+"&num_hab="+203+"&nom_disp="+"Contacto Seco Aire 203"+"&estado="+sw_estado;  	 	 
    	  break;
    	  
       //Piso 2 Habitacion 204  	  
      
       case 2041: //SW luz Habitacion 204
    	  var sw_estado = document.getElementById('204-checkSwitch-1').checked ? 1: 0;
    	  var bms_datos="num_piso="+2+"&num_hab="+204+"&nom_disp="+"Int Habitacion 204"+"&estado="+sw_estado;
    	  break;
      case 2042: //SW luz baño habitacion 204
      	  var sw_estado = document.getElementById('204-checkSwitch-2').checked ? 1: 0;
    	  var bms_datos="num_piso="+2+"&num_hab="+204+"&nom_disp="+"Int Baño 204"+"&estado="+sw_estado;
    	  break;
      case 2043://Contacto TV Habitacion 204
     	  var sw_estado = document.getElementById('204-checkSwitch-3').checked ? 1: 0;
    	  var bms_datos="num_piso="+2+"&num_hab="+204+"&nom_disp="+"Contacto Seco TV 204"+"&estado="+sw_estado; 
    	  break;	  
      case 2044://Contacto Aire Habitacion 204
      	  var sw_estado = document.getElementById('204-checkSwitch-4').checked ? 1: 0;
    	  var bms_datos="num_piso="+2+"&num_hab="+204+"&nom_disp="+"Contacto Seco Aire 204"+"&estado="+sw_estado;  	 	 
    	  break;   	  
    	  
}   //End Switch

  $.ajax({
	    type:'post',
	    url:'php/guarda_estados.php',
	    data:bms_datos,
	    success:function(r){
		if(r==1){
		    alert("Fallo el server");
			}else{
			 //	alert("Registro agregado con exito");
			}
	  }
  });
}

	</script>


    <script src="grafica203.js"></script> 
	<script src="termostato.js"></script> 
	<script src="consumos.js"></script> 
	<script src="consumoenpeso.js"></script> 
	<script src="encenderluces.js"></script> 

</body>
</html>
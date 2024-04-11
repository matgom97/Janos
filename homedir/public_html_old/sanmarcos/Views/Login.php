<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../Templates/Css/styles.css">
	<link rel="stylesheet" type="text/css" href="../Templates/Css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../Templates/Css/Bootstrap/bootstrap.min.css">
	<script src="../Templates/Js/bootstrap.min.js"></script>
	<script src="../Templates/Js/jquery.min.js"></script>

</head>
<body class="login">
	<header class="navbar navbar-expand-lg bd-navbar sticky-top">
		<nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
			<ul class="navbar-nav flex-row flex-wrap bd-navbar-nav">
				<li style="padding-left: 12px;" class="nav-item col-6 col-lg-auto">
					<a><img class="m-2" src="../Templates/Images/Resources/user.svg"><span>Iniciar sesión</span></a>
				</li>
			</ul>
			<ul class="navbar-nav flex-row flex-wrap bd-navbar-nav" style=" margin-top: -20px; margin-bottom: -16px; margin-right: 15px;">
				<li style="padding-left: 12px;" class="nav-item col-6 col-lg-auto"><a><img class="m-2" style="filter: none!important;max-width: 150px;" src="../Templates/Images/Login/logo-BMS-JANOS-blanco.png"></a></li>
			</ul>
		</nav>
	</header>
	<div class="container text-center" style="max-width: 876px!important">
		<div class="row align-items-start">
			<div class="col mt-5">
				<div class="panel-login">
					<div>
						<p>Si ya tienes una cuenta,<br>
						por favor inicia sesión</p>
					</div>
					<div class="input-group mb-1 px-3 mt-5">
						<input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-1 px-3">
						<input type="Password" class="form-control" placeholder="Contraseña" aria-label="Password" aria-describedby="basic-addon1">
					</div>
					<div class="text-right input-group mb-3 px-3 form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
						<span class="text-italic">recordar nombre de usuario</span>
					</div>
					<div>
						<button id="btnLogin" class="bg-or border-0 btn-controllerNew mt-4 mb-1" style="padding: 12px 37px;">Iniciar sesión</button>
					</div>	
					<div>
						<a href="Index.php" class="text-italic">olvidé mi contraseña</a>
					</div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="border-color: transparent!important; font-size: 10px;">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							Por favor ingresar un usuario válido
						</div>
						<div class="modal-footer" style="border-color: transparent!important;">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
							<button type="button" class="btn btn-primary" >Ok</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$("#btnLogin").click(function () {
			$("#exampleModal").modal('show')
		});
	</script>
</body>
</html>
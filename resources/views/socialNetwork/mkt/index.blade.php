<!DOCTYPE html>
  <html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Language" content="es_ES">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="apple-touch-icon" sizes="57x57" href="https://mkt.diunsa.hn/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="https://mkt.diunsa.hn/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://mkt.diunsa.hn/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://mkt.diunsa.hn/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://mkt.diunsa.hn/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://mkt.diunsa.hn/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="https://mkt.diunsa.hn/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://mkt.diunsa.hn/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://mkt.diunsa.hn/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="https://mkt.diunsa.hn/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://mkt.diunsa.hn/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://mkt.diunsa.hn/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://mkt.diunsa.hn/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="https://mkt.diunsa.hn/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


		<!--Import Google Icon Font-->
		<link href="https://mkt.diunsa.hn/css/materialicons.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://mkt.diunsa.hn/css/font-awesome.min.css">

		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="https://mkt.diunsa.hn/css/materialize.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="https://mkt.diunsa.hn/css/perfect-scrollbar.min.css" />
		<link type="text/css" rel="stylesheet" href="https://mkt.diunsa.hn/css/datatables.min.css" />
		<link rel="stylesheet" type="text/css" href="https://mkt.diunsa.hn/css/DateTimePicker.css" />
		<link rel="stylesheet" type="text/css" href="https://mkt.diunsa.hn/css/basic.min.css" />
		<link rel="stylesheet" type="text/css" href="https://mkt.diunsa.hn/css/dropzone.min.css" />
		<link rel="stylesheet" type="text/css" href="https://mkt.diunsa.hn/css/dropzone.min.css" />
		<link rel="stylesheet" type="text/css" href="https://mkt.diunsa.hn/css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="https://mkt.diunsa.hn/css/sweetalert.css">
		<link rel="stylesheet" type="text/css" href="https://mkt.diunsa.hn/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://mkt.diunsa.hn/css/jstree/default/style.min.css">


		<link href="https://mkt.diunsa.hn/css/jquery-ui.min.css" rel="stylesheet">
		<link href="https://mkt.diunsa.hn/css/estilo.css" rel="stylesheet">
		<!--Let browser know website is optimized for mobile-->

		<script src="https://mkt.diunsa.hn/js/sweetalert.min.js"></script>
		<script src="https://mkt.diunsa.hn/js/json2.js"></script>


		<title>Diunsa - Panel Administrativo</title>

    </head>

    <body>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://mkt.diunsa.hn/js/jquery.min.js"></script>
	<script type="text/javascript" src="https://mkt.diunsa.hn/js/materialize.min.js"></script>
	<script type="text/javascript" src="https://mkt.diunsa.hn/js/jquery-ui.min.js"></script>
	<header class="page-topbar navbar-fixed">
		<nav id="topbar" class="light-blue darken-4" role="navigation">
			<div class="nav-wrapper">
				<a id="logo-container" href="#" class="brand-logo">DIUNSA</a>
			</div>
		</nav>
		<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only orange darken-3">
			<i class="material-icons small">menu</i>
		</a>
	</header>
			<script type="text/javascript" src="https://mkt.diunsa.hn/js/sha512.js"></script>
		<div id="loginform" class="col z-depth-1">
			<h4 class="center">Ingreso de Credenciales</h4>
			<p></p>
			<form method="post" action="{{ url('mkt') }}">
				@csrf
				<div class="row">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="idusuario" name="username" class="validate mt-input" type="text">
						<label class="" for="icon_prefix">Usuario</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<!-- <input id="passw" name="passw" type="hidden"> -->
						<input id="p" name="password" class="validate mtimput" type="password">
						<label for="icon_passw">Contraseña</label>
					</div>
					<div class="col s12 center">
						<button class="btn orange darken-3 waves-effect waves-light" type="submit" onclick="javascript:encriptarpassw()">
							<i class="material-icons left">send</i>Ingresar
						</button>
					</div>
				</div>
			</form>
		</div>
		<script>
			function encriptarpassw(){
				//var passwenc = hex_sha512($("#p").val());
				//$("#passw").val(passwenc);
				//$("#p").val("");
			}
		</script>
	

    </body>
  

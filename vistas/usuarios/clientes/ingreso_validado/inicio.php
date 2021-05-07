<!DOCTYPE html>
<html lang="es">

<head>
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="inicio.css">
	<link rel="stylesheet" href="../../../../index_style/GlobalStyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<title>CLIENTE</title>
</head>

<body>

	<!-- <div id="botones" class="flex">
		<a 
		class="btn C1 H2" 
		onclick="cliente(0)">
		RESERVAR SERVICIOS
		</a>

		<a 
		class="btn C1 H2" 
		onclick="cliente(1)" 
		href="procesos/cancelarReserva/">
		CANCELAR RESERVAS
		</a>

		<a 
		id="cerrarSesion" 
		class="flex C1" 
		href="../../../../index.php">
		CERRAR SESIÓN
		</a>
	</div> -->

	<div id="vistas">

		<div class="vista" id="agendamiento">
			<iframe 
			src="procesos/agendar/agendar.php" 
			frameborder="0">
			</iframe>
		</div>


		<!-- <div class="vista" id="cancelarReserva">
			<iframe 
			src="procesos/cancelarReserva/cancelarReserva.php" 
			frameborder="0">
			</iframe>
		</div> -->

	</div>

	<!-- <script src="inicio.js"></script> -->
</body>

</html>
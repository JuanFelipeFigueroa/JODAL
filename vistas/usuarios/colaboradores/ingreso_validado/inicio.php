<!DOCTYPE html>
<html lang="es">

<head>
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../../../index_style/GlobalStyle.css">
	<link rel="stylesheet" href="inicio.css">
	<title>Document</title>
</head>

<body>

	<div id="botones" class="flex">
		<button class="btn C1 H2" onclick="vista(0)">MI PERFIL</button>
		<button class="btn C1 H2" onclick="vista(1)">HISTORIAL</button>
		<button class="btn C1 H2" onclick="vista(2)">NOVEDAD</button>
		<button class="btn C1 H2" onclick="vista(3)">CONFIGURACIÓN</button>
		<a id="cerrarSesion" class="flex C1" href="../../../index.php">CERRAR SESIÓN</a>
	</div>


	<div id="vistas">
		<div class="vista flex" id="inicio">

			<div id="colaborador" class="flex">
				<div id="perfil">
					<div id="nombre" class="flex C1">JHON</div>
					<img id="foto" src="fotos de perfil/perfil.jpg" alt="foto">
				</div>

				<div id="tiempoTotal" class="C3">04:32:21</div>

				<div class="logo flex"><img src="../../../logos/original.png" alt=""></div>

				<div id="activo_inactivo">
					<button id="estado" class="C3" onclick="modificarEstado()">ACTIVO</button>
				</div>

			</div>

			<div id="seccionServicios" class="flex">

				<div id="cabecera_servicios" class="flex C1">
					<span class="flex">RESERVAS ACTUALES</span>
					<div id="descuento" class="flex">10%</div>
				</div>

				<div id="cuerpo" class="flex">
					<div class="reserva flex C2">
						<div class="datosReserva flex C2">

							<div class="noombreCliente C1">MARIA PAULA FONSECA</div>

							<div class="servicios flex">
								<div class="servicio C3">SHAMPOO</div>
								<div class="servicio C3">CEPILLADO</div>
								<div class="servicio C3">PEINADO</div>
								<div class="servicio C3">MANICURE</div>
								<div class="servicio C3">PEDICURE</div>
								<div class="servicio C3">TINTURADO</div>
							</div>
						</div>

						<div class="tiempo">03:32:17</div>
					</div>
					<div class="reserva flex C2">
						<div class="datosReserva flex">

							<div class="noombreCliente C1">MARIA PAULA FONSECA</div>

							<div class="servicios flex">
								<div class="servicio C3">SHAMPOO</div>
								<div class="servicio C3">CEPILLADO</div>
								<div class="servicio C3">PEINADO</div>
								<div class="servicio C3">MANICURE</div>
								<div class="servicio C3">PEDICURE</div>
								<div class="servicio C3">TINTURADO</div>
							</div>
						</div>

						<div class="tiempo">03:32:17</div>
					</div>
					<div class="reserva flex C2">
						<div class="datosReserva flex">

							<div class="noombreCliente C1">MARIA PAULA FONSECA</div>

							<div class="servicios flex">
								<div class="servicio C3">SHAMPOO</div>
								<div class="servicio C3">CEPILLADO</div>
								<div class="servicio C3">PEINADO</div>
								<div class="servicio C3">MANICURE</div>
								<div class="servicio C3">PEDICURE</div>
								<div class="servicio C3">TINTURADO</div>
							</div>
						</div>

						<div class="tiempo">03:32:17</div>
					</div>
					<div class="reserva flex C2">
						<div class="datosReserva flex">

							<div class="noombreCliente C1">MARIA PAULA FONSECA</div>

							<div class="servicios flex">
								<div class="servicio C3">SHAMPOO</div>
								<div class="servicio C3">CEPILLADO</div>
								<div class="servicio C3">PEINADO</div>
								<div class="servicio C3">MANICURE</div>
								<div class="servicio C3">PEDICURE</div>
								<div class="servicio C3">TINTURADO</div>
							</div>
						</div>

						<div class="tiempo">03:32:17</div>
					</div>

					<div class="reserva flex C2">
						<div class="datosReserva flex">

							<div class="noombreCliente C1">CAMILA ANDREA SUAREZ</div>

							<div class="servicios flex">
								<div class="servicio C3">SHAMPOO</div>
								<div class="servicio C3">PEINADO</div>
								<div class="servicio C3">PEDICURE</div>
							</div>
						</div>

						<div class="tiempo">01:00:04</div>
					</div>

				</div>

			</div>

		</div>



		<div class="vista" id="historial">
			<iframe src="procesos/historial/historial.html" frameborder="0"></iframe>
		</div>
		<div class="vista" id="novedades">
			<iframe src="procesos/novedades/novedades.html" frameborder="0"></iframe>
		</div>
		<div class="vista" id="configuracion">
			<iframe src="procesos/configuracion/configuracion.html" frameborder="0"></iframe>
		</div>
	</div>

	<script src="inicio.js"></script>
</body>

</html>
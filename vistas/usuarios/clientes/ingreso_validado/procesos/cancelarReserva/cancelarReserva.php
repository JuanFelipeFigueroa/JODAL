<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../../../../../index_style/GlobalStyle.css">
	<link rel="stylesheet" href="cancelarReserva.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<div id="botones" class="flex">
			<a 
			class="flex btn C1 H2" 
			href="../agendar/agendar.php">
			RESERVAR SERVICIOS
			</a>

			<a 
			class="flex btn C1 H2" 
			href="cancelarReserva.php">
			CANCELAR RESERVAS
			</a>

			<a 
			id="cerrarSesion" 
			class="flex C1" 
			href="../../../../../../index.php">
			CERRAR SESIÓN
			</a>
	</div>
	
	<span>TUS RESERVAS</span>

	<form id="contenido">
		
		<div class="colaborador">
			<div class="perfil">
				<div class="nombre">CAMILO</div>
				<img class="foto" src="../../fotos de perfil/perfil.jpg" alt="foto">
				<input class="seleccion" type="radio" name="colaborador" onclick="habilitar()">
			</div>

			<div class="servicios">
				<div class="servicio">PEINADO
					<input type="checkbox" class="check" disabled="false">
				</div>

				<div class="servicio">MANICURE
					<input type="checkbox" class="check" disabled="false">
				</div>
				
				<div class="servicio">PEDICURE
					<input type="checkbox" class="check" disabled="false">
				</div>
				
				<div class="servicio">CORTE HOMBRE
					<input type="checkbox" class="check" disabled="false">
				</div>
			</div>
		</div>

		<div class="cancelar">
			<!-- <input type="submit" value="CANCELAR SERVCIOS" id="reservar" onclick="correcto()"> -->
			<a href="../../mensajes_procesos_exitosos/cancelacionExitosa.html" target="_top">ACEPTAR</a>
			<a href="../../inicio.html" target="_top">CANCELAR</a>
		</div>

	</form>	

	<script src="cancelarReserva.js"></script>
</body>
</html>
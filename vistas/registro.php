<!DOCTYPE html>
<html lang="es">

<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="../index_style/GlobalStyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<title>REGISTRO</title>
</head>

<body>

	<div id="registro" class="flex">

		<form 	id="formularioRegistro" 
				class="formulario" 
				action="../controladores/registro.php" 
				method="post"
				target = "_parent">

			<fieldset class="C1">
				<legend class="legend C3">REGISTRO</legend>

				<div id="contenido" class="flex">

					<div class="flex">
						<label for="tipo_usuario_r">Tipo de Usuario</label>
						<select class="flex" name="tipo_usuario_r" id="tipo_usuario_r">
							<option value="CLIENTE">CLIENTE</option>
							<option value="COLABORADOR">COLABORADOR</option>
							<option value="ASISTENTE">ASISTENTE</option>
							<option value="ADMINISTRADOR">ADMINISTRADOR</option>
						</select>
					</div>

					<div class="flex">
						<label for="nombre">Nombre</label>
						<input type="text" id="nombre" name="nombre" required>
					</div>

					<div class="flex">
						<label for="numeroIdentificacionR">Nº Identificación</label>
						<input type="number" id="numeroIdentificacionR" name="numeroIdentificacionR" required >
					</div>

					<div class="flex">
						<label for="contrasenaRegistro">Contraseña</label>
						<input type="password" id="contrasenaRegistro" name="contrasenaRegistro" required>
					</div>

					<input type="submit" id="btnRegistrar" class="C4 H3" name="btnRegistrar" 
					value="ENVIAR">

					<div class="flex">
						<div id="mensaje">¿Ya estás registrado?</div>

						<a class="flex C4 H3" id="registrate" 
							href="ingreso.php">INGRESAR</a>
					</div>	

				</div>

			</fieldset>

		</form>

	</div>
</body>

<script>
	var nombreCliente = document.getElementById('nombre');
	nombreCliente.addEventListener('input', function(){if (this.value.length > 25) this.value =  this.value.slice(0,25);});	

	var numeroCliente = document.getElementById('numeroIdentificacionR');
	numeroCliente.addEventListener('input', function(){if (this.value.length > 10) this.value =  this.value.slice(0,10);});

	var contrasena = document.getElementById('contrasenaRegistro');
	contrasena.addEventListener('input', function(){if (this.value.length > 6) this.value =  
		this.value.slice(0,6);});	
</script>		

</html>
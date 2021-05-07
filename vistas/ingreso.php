<!DOCTYPE html>
<html lang="es">

<head>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="../index_style/GlobalStyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<title>INGRESO</title>
	
</head>

<body>

	<div id="ingreso" class="flex">

		<form   id="formularioIngreso" 
				class="formulario"
				action="../controladores/ingreso.php" 
				method="post"  
				target = "_parent">

			<fieldset class="C1">
				<legend class="legend C3">INGRESO</legend>

				<div id="contenido" class="flex">

					<div class="flex">
						<label for="tipo_usuario">Tipo de Usuario</label>
						<select class="flex" name="tipo_usuario" id="tipo_usuario">
							<option value="CLIENTE">CLIENTE</option>
							<option value="COLABORADOR">COLABORADOR</option>
							<option value="ASISTENTE">ASISTENTE</option>
							<option value="ADMINISTRADOR">ADMINISTRADOR</option>
						</select>
					</div>

					<div class="flex">
						<label for="numeroIdentificacionI">Número de Identificación</label>
						<input type="number" id="numeroIdentificacionI" name="numeroIdentificacionI" required>
					</div>

					<div class="flex">
						<label for="contraseñaIngreso">Contraseña</label>
						<input type="password" id="contrasenaIngreso" name="contrasenaIngreso" required>
					</div>

					<input type="submit" id="btnIngresar" class="C4 H3" name="btnIngresar" 
					value="INGRESAR">

					<div class="flex">
						<div id="mensaje">¿Aún no estás registrado?</div>

						<a class="flex C4 H3" id="registrate" 
							href="registro.php">REGISTRARME</a>
					</div>

				</div>

			</fieldset>

		</form>

	</div>

	
</body>

<script>
	var identificacion = document.getElementById('numeroIdentificacionI');
	identificacion.addEventListener('input', function(){if (this.value.length > 10) this.value = this.value.slice(0,10);});

	var contrasenaI = document.getElementById('contrasenaIngreso');
	contrasenaI.addEventListener('input', function(){if (this.value.length > 6) this.value = 
		this.value.slice(0,6);});
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</html>
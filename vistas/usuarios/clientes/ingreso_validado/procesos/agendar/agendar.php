<?php include_once '../../../../../../modelos/agendamiento_cliente.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../../../../../index_style/GlobalStyle.css">
	<link rel="stylesheet" href="agendar.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<div id="botones" class="flex">
			<a 
			class="flex btn C1 H2" 
			href="agendar.php">
			RESERVAR SERVICIOS
			</a>

			<a 
			class="flex btn C1 H2" 
			href="../cancelarReserva/cancelarReserva.php">
			CANCELAR RESERVAS
			</a>

			<a 
			id="cerrarSesion" 
			class="flex C1" 
			href="../../../../../../index.php" 
			onclick="<?php session_destroy() ?>"> 
			CERRAR SESIÓN
			</a>
	</div>

	<div class="contenedor" >
				<span>COLABORADORES</span>


					<?php foreach ($resultado as $dato):?>
				<div class="skills_col flex C2">
					
					<div class="colaborador">
						<div class="perfil">

							<div class="nombre flex"> <?php echo $dato['nombre'] ?> </div>

							<img class="foto" src="../../fotos de perfil/perfil.jpg" alt="foto">
							
							<!-- <input 
							class="seleccion" 
							type="radio" 
							name="colaborador"  
							> -->

							<div class="flex descuento">10%</div>
							<div class="flex tiempo">20:35</div>
						</div>
					</div>

						<?php 

						foreach ($resultado as $comodin)
						{

							$numero = $dato['id_empleado'];

							$consulta2 = "CALL skills_col ('$numero')";
							$skills_col = $pdo -> prepare($consulta2);
							$skills_col -> execute();
							$resultado2 = $skills_col->fetchAll();
						}

						?> 

							<div class="servicios flex">

							<?php foreach ($resultado2 as $dato2 ): 

								$skills = $dato2['nombre_tipo_servicio']; 
							  ?>

								<div class="servicio flex">
									<label for="tipo_servicio"><?php echo $skills; ?></label>
									<!-- <input type="radio" id="tipo_servicio" name="tipo_servicio" > -->
								</div>

							<?php  endforeach; ?>
							</div>


					<div class="flex contSelect">
						<a href="#" class="C3" id="seleccionar">SELECCIONAR</a>
					</div>

				</div>
				<?php endforeach ?>	


				<!-- <div id="divReserva">
					 <input type="submit" value="RESERVAR" id="reservar" onclick="correcto()">
					<a href="../../mensajes_procesos_exitosos/reservaExitosa.html" id="reservar" target="_top">RESERVAR</a>
				</div> -->

			</div class="flex contenedor">

</body>
</html>
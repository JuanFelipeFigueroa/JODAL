<?php 	
	require_once '../vistas/ingreso.php';
	include '../modelos/ingreso.php';

	// **********************************INGRESO********************************************	

	if (isset($_POST["numeroIdentificacionI"])) 
	{
		$id = $_POST["numeroIdentificacionI"];
		$contrasena = $_POST["contrasenaIngreso"];
		$t_usuario = $_POST["tipo_usuario"];
		$global_user = $t_usuario;

		// *************************************************************************************
		if ($global_user == "COLABORADOR") $global_user = "colaboradores";
		if ($global_user == "ASISTENTE") $global_user = "asistentes";
		if ($global_user == "ADMINISTRADOR") $global_user = "administradores";
		// *************************************************************************************
			
		// *************************************************************************************
		if ($t_usuario == "CLIENTE")
		{
			$t_usuario = "clientes";
			$t_id = "id_cliente";

			$resultado = Ingreso::IngresoUsuario($t_usuario, $t_id, $id);

			
			if (($resultado[0]===$id) && ($resultado[2]===$contrasena)) 
			{
				header("location: ../vistas/usuarios/clientes/ingreso_validado/procesos/agendar/agendar.php");
			}		
			else
			{
				header("location: ../index.php");
			}
		}
		// *************************************************************************************

		// *************************************************************************************
		if (($t_usuario == "COLABORADOR")||($t_usuario == "ASISTENTE")||($t_usuario == "ADMINISTRADOR"))
		{
			$t_usuario = "empleados";
			$t_id = "id_empleado";

			$resultado = Ingreso::IngresoUsuario($t_usuario, $t_id, $id);


			if (($resultado[0]===$id) && ($resultado[4]===$contrasena)) 
			{
				header("location: ../vistas/usuarios/".$global_user."/ingreso_validado/inicio.php");
			}
			else
			{
				header("location: ../index.php");
			}
		} 
		// *************************************************************************************
			
	}

	// *************************************************************************************
 ?>	
 
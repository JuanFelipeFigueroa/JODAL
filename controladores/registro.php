<?php 

	include '../modelos/registro.php';

	// **********************************REGISTRO*******************************************
	if ($_POST) 
	{

		$tipoUsuario = $_POST["tipo_usuario_r"];
		$nombre = $_POST["nombre"];
		$id = $_POST["numeroIdentificacionR"];
		$contrasena = $_POST["contrasenaRegistro"];

		$global_user = $tipoUsuario;
			
		// *************************************************************************************
		if ($tipoUsuario == "CLIENTE")
		{
			$tipoUsuario = "clientes";

			Registro::RegistroCliente($tipoUsuario, $id, $nombre, $contrasena);

		}  
		// *************************************************************************************

		// *************************************************************************************
		if (($tipoUsuario == "COLABORADOR")||($tipoUsuario == "ASISTENTE")||
			($tipoUsuario == "ADMINISTRADOR"))
		{

			$tipoUsuario = "empleados";
			$rol = ""; 
			$n_acceso = "";

			if ($global_user == "COLABORADOR") 
			{
				$rol =  1; 
				$n_acceso = 1;

				Registro::RegistroEmpleado($tipoUsuario, $id, $rol, $n_acceso, $nombre, $contrasena);

			}

			else if ($global_user == "ASISTENTE") 
			{
				$rol =  2; 
				$n_acceso = 2;

				Registro::RegistroEmpleado($tipoUsuario, $id, $rol, $n_acceso, $nombre, $contrasena);				
			}

			else if ($global_user == "ADMINISTRADOR") 
			{
				$rol =  3; 
				$n_acceso = 3;

				Registro::RegistroEmpleado($tipoUsuario, $id, $rol, $n_acceso, $nombre, $contrasena);				
			}

		} 
		// *************************************************************************************

		// header("location: ../index.php");
			
	}
	// *************************************************************************************
 ?>
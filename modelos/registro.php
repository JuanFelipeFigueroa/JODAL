<?php 

	class Registro
	{
		
		static function RegistroCliente($tipoUsuario, $id, $nombre, $contrasena)
		{
			include 'conexion2.php';

			$sql = "INSERT INTO $tipoUsuario VALUES ('$id', '$nombre', '$contrasena') ";

			if ($conexion -> query($sql)) 
			{

				header("location: ../vistas/usuarios/clientes/ingreso_validado/inicio.php");
			}
			else
			{
				die($sql.$conexion -> connect_error);
			}
		}

		static function RegistroEmpleado($tipoUsuario, $id, $rol, $n_acceso, $nombre, $contrasena)
		{
			include 'conexion2.php';

			$sql = "INSERT INTO $tipoUsuario VALUES ('$id',  $rol, $n_acceso, 
							'$nombre', '$contrasena', NULL, NULL, NULL, NULL, NULL, NULL)";

			if ($conexion -> query($sql)) 
			{

				header("location: ../index.php");
			}
			else
			{
				die($sql.$conexion -> connect_error);
			}
		}
	}
			
 ?>
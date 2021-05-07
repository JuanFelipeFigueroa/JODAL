<?php 

		class Ingreso 
		{
			static function IngresoUsuario($t_usuario, $t_id, $id)
			{	
				include 'conexion2.php';

				$sql = " SELECT *  FROM $t_usuario WHERE $t_id = '$id' ";
				

				if ($resultado = $conexion -> query($sql)) 
				{

					$resultado = $resultado->fetch_row();
				}

				return $resultado;

				$resultado -> close();

				$resultado = null;	
			}
		}
	

 ?>
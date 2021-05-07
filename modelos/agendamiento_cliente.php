<?php 

	include_once 'conexion.php';

	//*********************************************************************** 
	$consulta = "SELECT *  FROM empleados WHERE ROL_id_rol = 1";
	$ingresar = $pdo -> prepare($consulta);
	$ingresar -> execute();
	$resultado = $ingresar->fetchAll() ;
	//***********************************************************************

	//***********************************************************************
	// $consulta3 = "CALL skills_col ('$numero')";
	// $ingresar3 = $pdo -> prepare($consulta3);
	// $ingresar3 -> execute();
	// $resultado3 = $ingresar3;
	//***********************************************************************

// guia de instalacion
// manual tecnico.MVC,procedimientos,disparadores
// manual administrativo
// 	backups.plan de backups
// 	capacitacion de usuarios
// 	manual de usuarios

// manual calidad y pruebas
// manual de instalacion 

// instalador -> htdocs	

	//***********************************************************************
	// foreach ($resultado as $dato):

	// $numero = $dato['id_empleado'];
	// echo $numero."</br>";

	// 			$consulta2 = "CALL skills_col ('$numero')";
	// 			$ingresar2 = $pdo -> prepare($consulta2);
	// 			$ingresar2 -> execute();
	// 			$resultado2 = $ingresar2->fetchAll();

	// 			foreach ($resultado2 as $dato2 ) 
	// 			{
	// 				$skills = $dato2['nombre_tipo_servicio']; 
	// 				echo $skills."</br>";

	// 			}

	// endforeach; 
	//***********************************************************************

 ?>
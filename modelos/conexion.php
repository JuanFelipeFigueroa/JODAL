<?php 

	$link = 'mysql:host=localhost;dbname=jodal';
	$usuario = 'root';
	$password = '';


	try {

		$pdo =  new PDO($link, $usuario, $password);

		// echo "CONECTADO!!";
		
	} catch (Exception $e) {

		print "ERROR!: " . $e-> getMessage() . "<br/>";
		die();
		
	}
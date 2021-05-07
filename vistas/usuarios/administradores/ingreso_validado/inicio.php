<!DOCTYPE html>
<html lang="es">

<head>
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="inicio.css">
	<link rel="stylesheet" href=".././../../../index_style/GlobalStyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<title>ADMIN</title>
</head>

<body>

	<div id="contMenuVert" class="C1">
		<div class="menuVertical flex">

			<div class="contModulos">
				<button class="modulo C1 H2" onclick="modulosAdmin(0)">AGENDAMIENTO</button>
				<button class="modulo C1 H2" onclick="modulosAdmin(1)">COLABORADORES</button>
				<button class="modulo C1 H2" onclick="modulosAdmin(2)">EXISTENCIAS</button>
				<button class="modulo C1 H2" onclick="modulosAdmin(3)">PROVEEDORES</button>
				<button class="modulo C1 H2" onclick="modulosAdmin(4)">PRODUCTOS</button>
			</div>

			<div class="logo"><img src="../../../../logos/blanco.png" alt="logo"></div>

			<a 
			class="btnCerrarSesion C4" 
			href="../../../../index.php">
			CERRAR SESIÓN
			</a>

		</div>
	</div>

	<div id="mainV">

		<div id="usuario" class="flex C3">ADMIN</div>

		<button id="controlMenuOff" class="C1" onclick="menuOff()"><img src="../../../../iconos/menuwhite30-min.png"
				alt="menu"></button>

		<button id="controlMenuOn" class="C1" onclick="menuOn()"><img src="../../../../iconos/menuwhite30-min.png"
				alt="menu"></button>

		<div class="vistas">
			<iframe class="vista" src="modulos/agendamiento/buscarCliente.html" frameborder="0"
				id="agendamiento"></iframe>
			<iframe class="vista" src="modulos/seguimiento_colaboradores/seguimiento_colaboradores.html" frameborder="0"
				id="colaboradores"></iframe>
			<iframe class="vista" src="modulos/control_existencias/control_existencias.html" frameborder="0"
				id="existencias"></iframe>
			<iframe class="vista" src="modulos/control_proveedores/control_proveedores.html" frameborder="0"
				id="proveedores"></iframe>
			<iframe class="vista" src="modulos/salida_productos/salida_productos.html" frameborder="0"
				id="productos"></iframe>
		</div>

	</div>

	<script src="inicio.js"></script>
</body>

</html>
function menuOn() {
	document.getElementById('controlMenuOff').style.display = "";

	document.getElementById('mainV').style.width = "80%";

	document.getElementById('mainV').style.right = "0%";

	document.getElementById('contMenuVert').style.left = "0%";

	document.getElementById('controlMenuOn').style.display = "none";
}

function menuOff() {
	document.getElementById('controlMenuOn').style.display = "";

	document.getElementById('mainV').style.width = "";

	document.getElementById('mainV').style.right = "0%";

	document.getElementById('contMenuVert').style.left = "";

	document.getElementById('controlMenuOff').style.display = "none";
}

// Se declara un array ('vistas') que contiene a todos los elementos que tienen la clase ('vista')
var vistas = document.getElementsByClassName('vista');

// Se declara un array ('modulos') que contiene a todos los elementos que tienen la clase ('modulo')
var modulos = document.getElementsByClassName('modulo');

// Se cancela la visibilidad de todos los elementos del array ('vistas')
for (var i = 0; i < vistas.length; i++) vistas[i].style.display = "none";

// Se declara una función que recive como argumento el INDICE de la vista que va a ser visible
function modulosAdmin(indiceVista) {

	for (var i = 0; i < vistas.length; i++) {

		// Condicional que hace visible al elemento que correspode al INDICE que se recibió como argumento de la función
		if (i == indiceVista)
			vistas[i].style.display = "",
			modulos[i].style.backgroundColor = "#BFD6D5",
			modulos[i].style.color = "#000";

		// Se mantienen invisibles los elementos que no cumplan la condición
		else vistas[i].style.display = "none",
			modulos[i].style.backgroundColor = "",
			modulos[i].style.color = "";
	}
}
// Se muestra por defecto una de las vistas, agregando el evento ('click') a uno de los modulos
modulos[0].click(); // botón que corresponde a la vista ('agendamiento')
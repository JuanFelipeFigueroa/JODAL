// Se declara un array ('vistas') que contiene a todos los elementos que tienen la clase ('vista')
var vistas =  document.getElementsByClassName('vista');

// Se declara un array ('botones') que contiene a todos los elementos que tienen la clase ('btn')
var botones   =  document.getElementsByClassName('btn');

// Se cancela la visibilidad de todos los elementos del array ('vistas')
for (var i=0; i<vistas.length; i++)		vistas[i].style.display="none";

// Se declara una función que recive como argumento el INDICE de la vista que va a ser visible
function cliente(indiceVista){

	for (var i = 0; i < vistas.length; i++){

		// Condicional que hace visible al elemento que correspode al INDICE que se recibió como argumento de la función
		if (i == indiceVista)	
							vistas[i].style.display="",			
							botones[i].style.backgroundColor="#BFD6D5",
							botones[i].style.color="#000";

		// Se mantienen invisibles los elementos que no cumplan la condición
		else 				vistas[i].style.display="none",		
							botones[i].style.backgroundColor="",			
							botones[i].style.color="";
	}
}
// Se muestra por defecto una de las vistas, agregando el evento ('click') a uno de los botones
botones[0].click(); // botón que corresponde a la vista ('Reservar Servicios')
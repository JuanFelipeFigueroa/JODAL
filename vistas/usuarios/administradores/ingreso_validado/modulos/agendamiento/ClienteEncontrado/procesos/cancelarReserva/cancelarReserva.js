function habilitar() {

	var colaboradorSelccionado = document.getElementsByClassName('seleccion');

	var checkbox = document.getElementsByClassName('check');

		for (var i = 0; i < checkbox.length; i++) {
			checkbox[i].disabled="";
			checkbox[i].checked=1;
		}
}



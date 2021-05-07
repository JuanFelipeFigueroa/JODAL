/*************************************************************************************************************************/

var servi = document.getElementsByClassName("servicio");
var checkbox = document.getElementsByClassName("check");

function servicios() {

	for (var i = 0; i < 12 ; i++) {

		var num = Math.floor((Math.random() * (11-0))+1);
			servi[num].style.display="none";	
			checkbox[num].style.display="none";	
	}

	for (var i = 0; i < 6 ; i++) {

		var num = Math.floor((Math.random() * (11-0))+1);
			servi[num].style.display="flex";	
			checkbox[num].style.display="block";	
	}

	for (var i = 0; i < checkbox.length; i++) {
		checkbox[i].checked=0;	
	}
}

/*************************************************************************************************************************/
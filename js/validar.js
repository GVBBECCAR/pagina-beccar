//Función que permite solo Números
function numeros(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patrón de entrada, en este caso solo acepta numeros
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}


//Función que permite solo Letras
function letras(e) {
    tecla = (document.all)? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patrón de entrada, en este caso solo acepta todo tipo de letras tambien con tildes
    patron = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}


//Funcion para correo 
function correo(){
                
	// Obtener la referencia del input
	var input_correo = document.getElementById('correo');
	
	// Definimos nuestra expresion
	var validarEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

	//  Revisamos la cadena del input del correo
	if( validarEmail.test(input_correo.value) ){
		alert('El correo es valido');
		return true;
	}
        else
        {
            alert('El correo es invalido');
            return false;
	    }
} 


//VALIDAR TEXT AREA
document.getElementById("ta").addEventListener("keypress",verificar);

function verificar(e) {
    //Comprobamos con una expresion regular que el caracter pulsado sea
    // una letra, numero o un espacio
    if(e.key.match(/[a-z0-9ñçáéíóú\s]/i)===null) {

        // Si la tecla pulsada no es la correcta, eliminado la pulsación
        e.preventDefault();

    }

}



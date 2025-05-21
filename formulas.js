function leer() {
    var nombre = document.getElementById("cliente").value;
    var contacto = document.getElementById("numero").value;
    var fehor = document.getElementById("fecha").value;

    var serv = document.getElementsByName("servicio");
    var s = "";
    for (var i = 0; i < serv.length; i++) {
        if (serv[i].checked) {
            s = serv[i].value;
            break;
        }
    }

    var imagen = document.getElementById("imagen").files[0]; 

    var datosDiv = document.getElementById("datos");
    datosDiv.style.color = "black"; 
    datosDiv.style.textAlign = "center"


    datosDiv.innerHTML = 
        "<br>Nombre del cliente: " + nombre +
        "<br>Número de contacto: " + contacto +
        "<br>Fecha y hora del servicio: " + fehor +
        "<br>Servicio: " + s +
        "<br>Foto adjunta: ";

    if (imagen) {
        var imgElement = document.createElement("img");
        imgElement.src = URL.createObjectURL(imagen); // Crear URL temporal de la imagen
        imgElement.style.maxWidth = "200px"; // Ajustar tamaño de imagen
        imgElement.style.display = "block"; // Asegurar que se muestre correctamente
        imgElement.style.margin = "10px auto"; // Centrar la imagen
        datosDiv.appendChild(imgElement); // Agregar imagen al div
    }

   


}


//FUNCIONES DE ESCONDER 

// --TABLAS PAGINA INICIO

function toggleTabla(idTabla) {
	const tabla = document.getElementById(idTabla);

    if(tabla){
        tabla.style.display = (tabla.style.display === "none" || tabla.style.display === "") ? "table" : "none";
    }

    
	
}

// --CAJAS PREGUNTAS FRECUENTES

function toggleCaja(idCaja) {
	const caja = document.getElementById(idCaja);
	if (caja) {
		caja.style.display = (caja.style.display === "none" || caja.style.display === "") ? "block" : "none";
	}
}


		
//FUNCIONES DE MOSTRAR

// --CAJA DEL PDF
function mostrarCaja() {
  const cajax = document.getElementById("cajapdf");
  cajax.style.display = "block";
}


function mostrarpdf(){

    const abrir = document.getElementById("ifpdf");
  abrir.style.display = "block";

}


/* Funcion de comentario */

function agregarComentario() {
    let nombre = document.getElementById("nombreUsuario").value;
    let texto = document.getElementById("comentarioTexto").value;

    if (nombre.trim() !== "" && texto.trim() !== "") {
        let nuevoComentario = document.createElement("div");
        nuevoComentario.classList.add("comentario");
        nuevoComentario.innerHTML = `<span class="nombre">${nombre}:</span> ${texto}`;
        
        document.getElementById("listaComentarios").appendChild(nuevoComentario);
        
        document.getElementById("nombreUsuario").value = ""; // Limpiar el campo de nombre
        document.getElementById("comentarioTexto").value = ""; // Limpiar el campo de texto
    } else {
        alert("Por favor, ingresa tu nombre y comentario.");
    }
}
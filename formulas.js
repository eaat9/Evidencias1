function leer() {
    var nombre = document.forms["formulario"].elements["user"].value;
    var clave = document.getElementById("pass").value;
    var car = document.getElementById("carrera").value;

    var gen = document.getElementsByName("genero");
    var g = "";
    for (var i = 0; i < gen.length; i++) {
        if (gen[i].checked) {
            g = gen[i].value;
        }
    }

    var p = document.getElementById("privacidad").checked;

    document.getElementById("datos").innerHTML = 
        "<br>Nombre: " + nombre +
        "<br>Password: " + clave +
        "<br>Tu carrera es: " + car +
        "<br>Tu género es: " + g +
        "<br>Aceptó el acuerdo: " + (p ? "Sí" : "No");
}
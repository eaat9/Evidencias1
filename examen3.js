function calcularPago() {
    let horas = document.getElementById("horas").value;
    let tipoAuto = document.getElementById("tipoAuto").value;
    let tarifa;

    switch (tipoAuto) {
        case "auto":
            tarifa = 20;
            break;
        case "camioneta":
            tarifa = 30;
            break;
        case "camion":
            tarifa = 40;
            break;
        default:
            tarifa = 0;
    }

    if (horas > 0) {
        let total = horas * tarifa;
        document.getElementById("resultado").textContent = `Total a pagar: $${total.toFixed(2)}`;
    } else {
        document.getElementById("resultado").textContent = "Por favor, introduce un número de horas válido.";
    }
}
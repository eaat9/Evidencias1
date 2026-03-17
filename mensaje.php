<html>
<head><title>Mail</title></head>
<body>
<?php
if(isset($_POST['submit'])) {
	$para = "roxana.herrera@upslp.edu.mx"; 
	$asunto = "Mensaje desde el sitio de SLP";
	$nombre = $_POST['nombre'];
	$correo = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	$cuerpo = "Enviado por: $nombre\n E-Mail: $correo\nMensaje: $mensaje\n";
	echo "El mensaje ha sido enviado a $para!";
	mail($para, $asunto, $cuerpo);
} else {	echo "¡Ha ocurrido un error!";}
?>


</body>
<footer>
	<br>
	<p>Emilio Abraham Araiza Toledo 186349</p>
</footer>
</html>
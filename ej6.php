<html>
<head><title>Fecha</title></head>
<body>
<?php
	$dia = array("domingo","lunes","martes","miercoles",
	"jueves","viernes","sábado");
	$dia_numero =date("w");
	echo "Hoy es $dia[$dia_numero]";
	$dia_numero =date("z");
	echo "<br>Hoy es $dia_numero /365";
?>
</body>
<footer>
	<br>
	<p>Emilio Abraham Araiza Toledo 186349</p>
</footer>
</html>
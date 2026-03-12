<!DOCTYPE html>
<html>
<head>
<title>Anagramas</title>
</head>
<body>

<form action="saludo2.php" method="post">
Indica tu género: 
<input type="radio" name="genero" value="0">Sr.<br>
<input type="radio" name="genero" value="1">Sra.<br>
Escribe tu apellido:<br>
<input type="text" name="apellido"><br>
<input type="submit"><br>
</form>

<?php
if(isset($_POST['genero']))
    echo "Falta agregar genero <br>";
if(isset($_POST['apellido']) 
    echo "Falta agregar apellido <br>";
if(isset($_POST['apellido']) || $_POST ['apellido'] == "") 
    echo "Falta agregar apellido <br>";

if(isset($_POST['genero']) && isset($_POST['apellido']) && $_POST['apellido']!="")
{
   if ($_POST['genero'] == 0)
   {echo "Hola Sr.  ";}
   else
   { echo "Hola Sra.  "; }
echo " <b> {$_POST['apellido']}</b>, un gusto saludarte";
}
else
{
   if(isset($_POST['enviar']))
   {echo"<b>Escribe tu apellido</b>";
   }
}
?>



</body>
<footer>
  <br>
  <p>Emilio Abraham Araiza Toledo 186349</p>
</footer>
</html>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Canción</title>
</head>
<body>
<?php 
$ar=fopen("datos.txt","r") or die("No se pudo abrir el archivo");  //forma de apertura
while (!feof($ar)) //función feof retorna true si se ha llegado al final del archivo 
{ 
   $linea=fgets($ar); 
   $lineasalto=nl2br($linea); //convierte el salto de línea a la marca <br> 
   echo $lineasalto; 
} 
fclose($ar); ?> 

</body>
</html>
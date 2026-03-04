<html>
<head><title>Calificaciones</title></head>
<body>
<?php
echo date("Y-m-d");

$nom = array("Jessica","Oscar","Manuel","Ana","Efren");
$cal = array();

$cont_ap = 0;
$cont_na = 0;

$texto = '<table border=1>
<tr>
    <th>Nombre</th>
    <th>Parcial 1</th>
    <th>Parcial 2</th>
    <th>Parcial 3</th>
    <th>Prom</th>
</tr>';

for($i=0;$i<5;$i++){
    $texto .= '<tr>';
    $texto .= '<td>'.$nom[$i].'</td>';

    $suma = 0;

    for($j=0;$j<3;$j++){
        $a = rand(300,1000);
        $cal[$i][$j] = $a/100;
        $suma += $cal[$i][$j];

        $texto .= '<td>'.$cal[$i][$j].'</td>';
    }

    $prom = $suma / 3;

    $texto .= '<td>'.number_format($prom,2).'</td>';
    $texto .= '</tr>';

    if($prom >= 6){
        $cont_ap++;
    }else{
        $cont_na++;
    }
}

$texto .= '</table>';

echo $texto;

echo "Aprobados :<img src='ap.jpg' height='10px' width='".($cont_ap*20)."'> ".$cont_ap."<br>";
echo "No Aprobados :<img src='na.jpg' height='10px' width='".($cont_na*20)."'> ".$cont_na."<br>";

?>
</body>
<footer>
  <br>
  <p>Emilio Abraham Araiza Toledo 186349</p>
</footer>
</html>

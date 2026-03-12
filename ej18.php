<!DOCTYPE html>
<html>
<head>
<title>Anagramas</title>
</head>
<body>

<form method="post">
    Palabra 1: <input type="text" name="pal1"><br><br>
    Palabra 2: <input type="text" name="pal2"><br><br>
    <input type="submit" value="Verificar">
</form>

<?php
    $palabra1 = strtoupper($_POST['pal1']);
    $palabra2 = strtoupper($_POST['pal2']);

    $sep1 = str_split($palabra1);
    $sep2 = str_split($palabra2);

    sort($sep1);
    sort($sep2);

    $orden1 = implode('', $sep1);
    $orden2 = implode('', $sep2);

    if($orden1 == $orden2){
        echo "Son anagramas";
    }else{
        echo "No son anagramas";
    }
?>


</body>
<footer>
  <br>
  <p>Emilio Abraham Araiza Toledo 186349</p>
</footer>
</html>
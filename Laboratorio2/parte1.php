<?php
if (isset($_POST['tabla'])) {
    $numeroTablaMultiplicar = (int)$_POST['tabla'];
    $tabla = "";

    for ($i = 0; $i <= 10; $i++) {
        $tabla .= $numeroTablaMultiplicar . " x " . $i . " = " . ($numeroTablaMultiplicar * $i) . "<br>";
    }

    echo $tabla;
    exit;
}
?>

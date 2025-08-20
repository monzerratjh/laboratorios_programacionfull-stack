<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Bhaskara</title>
</head>
<body>

<style>
form {
    display: flex;
    flex-direction: column;
    width: 200px;
    gap: 10px;
}

body {
    margin: 2rem;
}
</style>

<form action="" method="post">

    <label for="a">Número 1:</label>
    <input type="text" name="numero1" id="a" required>

    <label for="b">Número 2:</label>
    <input type="text" name="numero2" id="b" required>

    <label for="c">Número 3:</label>
    <input type="text" name="numero3" id="c" required>

    <input type="submit" value="Calcular" name="envio">
</form>

</body>
</html>

<?php
function raizPositiva($discriminante): bool {
    return $discriminante >= 0;
}

function baskara($a, $b, $c) {
    $discriminante = ($b * $b) - (4 * $a * $c);
    
    if (!raizPositiva($discriminante)) {
        return null; // No tiene soluciones reales
    }

    $raiz = sqrt($discriminante);
    $x1 = (-$b + $raiz) / (2 * $a);
    $x2 = (-$b - $raiz) / (2 * $a);
    
    return [$x1, $x2];
}

if (isset($_POST['envio'])) {
    $a = (float) $_POST['numero1'];
    $b = (float) $_POST['numero2'];
    $c = (float) $_POST['numero3'];

    $resultado = baskara($a, $b, $c);

    if ($resultado === null) {
        echo "<p>No existen soluciones reales.</p>";
    } else {
        echo "<p>Las soluciones son: x1 = {$resultado[0]}, x2 = {$resultado[1]}</p>"; //como es un arry hay que imprimir en pantalla el resultado teniendo en duenta las posiciones
    }
}
?>

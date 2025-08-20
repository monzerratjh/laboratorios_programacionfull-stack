<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
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

    <label for="numero1">Número 1:</label>
    <input type="text" name="numero1" id="numero1" required>

    <label for="numero2">Número 2:</label>
    <input type="text" name="numero2" id="numero2" required>

    <label for="operador">Operación:</label>
    <select name="operador" id="operador" required>
        <option value="+">Suma (+)</option>
        <option value="-">Resta (-)</option>
        <option value="*">Multiplicación (*)</option>
        <option value="/">División (/)</option>
    </select>

    <input type="submit" value="Calcular" name="envio">
</form>

<?php
// Verificamos si se envió el formulario
if (isset($_POST['envio'])) {

    // Recogemos los datos y los validamos como números
    $num1 = (float)$_POST['numero1'];
    $num2 = (float)$_POST['numero2'];
    $operador = $_POST['operador'];

    switch ($operador) {
        case '+':
            $resultado = $num1 + $num2;
            break;
        case '-':
            $resultado = $num1 - $num2;
            break;
        case '*':
            $resultado = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Error: División por cero";
            }
            break;
        default:
            $resultado = "Operador no válido";
            break;
    }

    echo "<h3>Resultado: $resultado</h3>";
}
?>
</body>
</html>

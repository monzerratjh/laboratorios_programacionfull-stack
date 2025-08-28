<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases Númericas</title>
</head>
<body>
    <h1>Bases Númericas</h1>

    <form action="" method="post">
        <label for="">Número</label>
        <input type="number" name="numeroConvertirNAME" id="baseIngresada" required>

        <label for="">Tipo de Base:</label>
        <select name="tipoBaseNAME" id="tipoBase" required>
            <option value="Decimal">Decimal</option>
            <option value="Octal">Octal</option>
            <option value="Binario">Binario</option>
            <option value=" Hexadecimal">Hexadecimal</option>
        </select>

        <input type="submit" id="formBases">
    </form>
    
    <form action="" method="post">

        <!--El NAME al final va para indicar que está en el campo de name-->
        <label for="">Número</label>
        <input type="number" name="numeroCalcularNAME" id="num1" required>

        <label for="">Número 2</label>
        <input type="number" name="numero2CalcularNAME" id="num2">

        <label for="operador">Operación:</label>
        <select name="operador" id="tipoOperador" required>
            <option value="+">Suma (+)</option>
            <option value="-">Resta (-)</option>
            <option value="*">Multiplicación (*)</option>
            <option value="/">División (/)</option>
        </select>

        <input type="submit" id="formBases2">
    </form>

</body>
</html>
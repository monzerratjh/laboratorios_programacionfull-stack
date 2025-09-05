<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="contenedor-uno">
        <h1>Bases Numéricas y Calculadora</h1>

        <form id="formBasesLab3">
            <h2>Conversión de Bases</h2>

            <label for="">Tipo de Base:</label> 
            <select name="tipoBaseNAME" required>
                <option value="Decimal">Decimal</option>
                <option value="Binario">Binario</option>
                <option value="Octal">Octal</option>
                <option value="Hexadecimal">Hexadecimal</option>
            </select>

            <label for="">Número a convertir</label>
            <input type="number" name="numeroConvertirNAME"  required>

            <label for="">Tipo de Base a Convertir:</label>
            <select name="baseConvertirNAME" required>
                <option value="Decimal">Decimal</option>
                <option value="Binario">Binario</option>
                <option value="Octal">Octal</option>
                <option value="Hexadecimal">Hexadecimal</option>
            </select>

            <input type="submit" id="btn-convertirBase" class="boton">
        </form>
        <div id="resultadoConversionLab3"></div>

        <form id="formCalcBasesLab3">
            <h2>Calculadora entre Bases</h2>
            
            <label for="">Número 1</label>
            <input type="number" name="num1" required>
            
            <label for="operador">Operación:</label>
            <select name="operador" id="tipoOperador" required>
                <option value="+">Suma (+)</option>
                <option value="-">Resta (-)</option>
                <option value="*">Multiplicación (*)</option>
                <option value="/">División (/)</option>
            </select>

            <label for="">Número 2</label>
            <input type="number" name="num2" required>
            
            <input type="submit" id="formBases2"class="boton">
        </form>
        <div id="resultadoCalcBasesLab3"></div>
    </section>

<script src="lab3.js"></script>
</body>
</html>

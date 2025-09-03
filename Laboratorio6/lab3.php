<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <h1>Bases Numéricas y Calculadora</h1>

        <form id="formBasesLab3">
            <h2>Conversión de Bases</h2>
            <select name="tipoBaseNAME" required>
                <option value="Decimal">Decimal</option>
                <option value="Binario">Binario</option>
                <option value="Octal">Octal</option>
                <option value="Hexadecimal">Hexadecimal</option>
            </select>
            <input type="number" name="numeroConvertirNAME" placeholder="Número" required>
            <select name="baseConvertirNAME" required>
                <option value="Decimal">Decimal</option>
                <option value="Binario">Binario</option>
                <option value="Octal">Octal</option>
                <option value="Hexadecimal">Hexadecimal</option>
            </select>
            <button type="submit">Convertir</button>
        </form>
        <div id="resultadoConversionLab3"></div>

        <form id="formCalcBasesLab3">
            <h2>Calculadora entre Bases</h2>
            <input type="number" name="num1" placeholder="Número 1" required>
            <input type="number" name="num2" placeholder="Número 2" required>
            <select name="operador" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
        <div id="resultadoCalcBasesLab3"></div>
    </section>

<script src="lab3.js"></script>
</body>
</html>

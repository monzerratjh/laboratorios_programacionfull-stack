<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="contenedor-uno">

        <form id="formCalculadoraLab1">
            <h2>Calculadora</h2>

            <label for="num1Calculadora">Número 1:</label>
            <input type="number" name="num1Calculadora" id="num1Calculadora" required>

            <label for="num2Calculadora">Número 2:</label>
            <input type="number" name="num2Calculadora" id="num2Calculadora" required>

            <label for="operadorCalculadora">Operación:</label>
            <select name="operadorCalculadora" id="operadorCalculadora" required>
                <option value="+">Suma (+)</option>
                <option value="-">Resta (-)</option>
                <option value="*">Multiplicación (*)</option>
                <option value="/">División (/)</option>
            </select>

            <input type="submit" value="Calcular" name="calcular-calculadora">
        </form>
        <div id="resultadoCalculadoraLab1"></div>
    </section>
        
    <section class="contenedor-dos">
        <form id="formAreasLab1">
            <h2>Área del cuadrado:</h2>

            <label for="ladoCuadrado">Ingresar valor del lado:</label>
            <input type="number" name="ladoCuadrado" id="ladoCuadrado" required>

            <input type="submit" value="Calcular área" name="areaCuadrado">
        </form>
        <div id="resultadoCuadradoLab1"></div>

        <form id="formRectanguloLab1">
            <h2>Área del rectángulo:</h2>

            <label for="ladoRectangulo">Largo:</label>
            <input type="number" name="ladoRectangulo" id="ladoRectangulo" required>

            <label for="anchoRectangulo">Ancho:</label>
            <input type="number" name="anchoRectangulo" id="anchoRectangulo" required>
            
            <input type="submit" value="Calcular área" name="areaRectangulo">
        </form>
        <div id="resultadoRectanguloLab1"></div>

        <form id="formTrianguloLab1">
            <h2>Área del triángulo:</h2>

            <label for="baseTriangulo">Base:</label>
            <input type="number" name="baseTriangulo" id="baseTriangulo" required>

            <label for="alturaTriangulo">Altura:</label>
            <input type="number" name="alturaTriangulo" id="alturaTriangulo" required>
            
            <input type="submit" value="Calcular área" name="areaTriangulo">
        </form>
        <div id="resultadoTrianguloLab1"></div>

        <form id="formCircunferenciaLab1">
            <h2>Área de la circunferencia:</h2>

            <label for="radioCircunferencia">Radio:</label>
            <input type="number" name="radioCircunferencia" id="radioCircunferencia" required>
            
            <input type="submit" value="Calcular área" name="areaCircunferencia">
        </form>
        <div id="resultadoCircunferenciaLab1"></div>
    </section>
        
    <section class="contenedor-uno">
        <form id="formBhaskaraLab1">
            <h2>Bhaskara</h2>

            <label for="a">a:</label>
            <input type="number" name="a" id="a" required>

            <label for="b">b:</label>
            <input type="number" name="b" id="b" required>

            <label for="c">c:</label>
            <input type="number" name="c" id="c" required>

            <input type="submit" value="Calcular" name="calcular-bhaskara">
        </form>
        <div id="resultadoBhaskaraLab1"></div>
    </section>

<script src="lab1.js"></script>
</body>
</html>

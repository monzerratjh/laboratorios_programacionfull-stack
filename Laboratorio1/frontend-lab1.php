<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Roboto:ital,wght@0,100..900;1,100..900&family=Special+Gothic+Expanded+One&display=swap');

        * {
            font-family: "Roboto", sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        body {
            margin: 0rem;
        }

        .calculadoraInicial {
            background-color: #b2e2f2;
            padding: 30px;
            display: flex;
            justify-content: center;
        }

        .areas {
            background-color: #ffda9e;
            display: flex;
            justify-content: space-around;
            padding-top: 30px;
        }

        input{
            border-radius: 200px;
            border: none;
            padding: 10px;
        }

        select{
            border-radius: 200px;
            border: none;
            padding: 10px;
        }
    </style>
</head>
<body>

<section class="calculadoraInicial">
<form action="backend-lab1.php" method="post" >
    <h1>Calculadora</h1>

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

    <?php if (isset($_GET['resultadoCalculadora'])): ?>
        <p>Resultado: <?= $_GET['resultadoCalculadora'] ?></p>
    <?php endif; ?>
</form>
</section>

<section class="areas">
    <form action="backend-lab1.php" method="post">
        <h2>Área del cuadrado:</h2>
        <label for="ladoCuadrado">Ingresar valor del lado:</label>
        <input type="number" name="ladoCuadrado" id="ladoCuadrado" required>

        <input type="submit" value="Calcular área" name="areaCuadrado">

        <?php if (isset($_GET['resultadoCuadrado'])): ?>
            <p>Área: <?= $_GET['resultadoCuadrado'] ?></p>
        <?php endif; ?>
    </form>

    <form action="backend-lab1.php" method="post">
        <h2>Área del rectángulo:</h2>
        <label for="ladoRectangulo">Largo:</label>
        <input type="number" name="ladoRectangulo" id="ladoRectangulo" required>
        <label for="anchoRectangulo">Ancho:</label>
        <input type="number" name="anchoRectangulo" id="anchoRectangulo" required>
        
        <input type="submit" value="Calcular área" name="areaRectangulo">

        <?php if (isset($_GET['resultadoRectangulo'])): ?>
            <p>Área: <?= $_GET['resultadoRectangulo'] ?></p>
        <?php endif; ?>
    </form>

    <form action="backend-lab1.php" method="post">
        <h2>Área del triángulo:</h2>
        <label for="baseTriangulo">Base:</label>
        <input type="number" name="baseTriangulo" id="baseTriangulo" required>
        <label for="alturaTriangulo">Altura:</label>
        <input type="number" name="alturaTriangulo" id="alturaTriangulo" required>
        
        <input type="submit" value="Calcular área" name="areaTriangulo">

        <?php if (isset($_GET['resultadoTriangulo'])): ?>
            <p>Área: <?= $_GET['resultadoTriangulo'] ?></p>
        <?php endif; ?>
    </form>

    <form action="backend-lab1.php" method="post">
        <h2>Área de la circunferencia:</h2>
        <label for="radioCircunferencia">Radio:</label>
        <input type="number" name="radioCircunferencia" id="radioCircunferencia" required>
        
        <input type="submit" value="Calcular área" name="areaCircunferencia">

        <?php if (isset($_GET['resultadoCircunferencia'])): ?>
            <p>Área: <?= $_GET['resultadoCircunferencia'] ?></p>
        <?php endif; ?>
    </form>
</section>

<section class="calculadoraInicial">
    <form action="backend-lab1.php" method="post">
        <h2>Bhaskara</h2>
        <label for="a">Número 1:</label>
        <input type="number" name="a" id="a" required>

        <label for="b">Número 2:</label>
        <input type="number" name="b" id="b" required>

        <label for="c">Número 3:</label>
        <input type="number" name="c" id="c" required>

        <input type="submit" value="Calcular" name="calcular-bhaskara">

        <?php if (isset($_GET['resultadoBhaskara'])): ?>
            <p><?= $_GET['resultadoBhaskara'] ?></p>
        <?php endif; ?>
    </form>
</section>

</body>
</html>

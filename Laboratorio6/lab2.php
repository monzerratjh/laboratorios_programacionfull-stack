<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="contenedor-uno">
        <form id="formTablaLab2">
            <h2>Tabla de Multiplicar</h2>
            
            <label for="tablaFORM">Ingrese el número de la tabla que quiere ver</label>
            <input type="number" name="tablaNAME" id="tablaID" required>

            <input type="submit" value="Ver tabla" class="boton">
        </form>
        <div id="resultadoTablaLab2"></div>
    </section>

    <section class="contenedor-dos">
        <form id="formCincoOroLab2">
            <h2>Posibilidades de ganar el Cinco de Oro</h2>

            <label for="vecesApostadas">Ingrese cuántas veces ha apostado:</label>
            <input type="number" name="vecesApostadasNAME"  required>

            <input type="submit" id="btn-factorizar" class="boton">

            <div id="resultadoCincoOroLab2"></div>
        </form>

        <form id="formFactorialLab2">
            <h2>Cálculo de factoriales</h2>

            <label for="numeroAFactorizar">Ingrese el número que quiere factorizar:</label>
            <input type="number" max="99" 
            name="numeroFactorizarNAME"  required>

            <input type="submit" id="btn-factorizar" class="boton">

            <div id="resultadoFactorialLab2"></div>
        </form>
    </section>

<script src="lab2.js"></script>
</body>
</html>

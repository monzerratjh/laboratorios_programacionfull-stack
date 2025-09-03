<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="contenedor-dos">

        <form id="formTablaLab2">
            <h2>Tabla de Multiplicar</h2>
            
            <label for="tablaFORM"><strong>Ingrese el número de la tabla que quiere ver</strong></label>
            <input type="number" name="tablaNAME" id="tablaID" required>
            <input type="submit" value="Ver tabla" class="boton">
        </form>
        <div id="resultadoTablaLab2"></div>

        <form id="formCincoOroLab2">
            <h2>Probabilidades Cinco de Oro</h2>
            <input type="number" name="vecesApostadasNAME" placeholder="Veces apostadas" required>
            <button type="submit">Calcular</button>
        </form>
        <div id="resultadoCincoOroLab2"></div>

        <form id="formFactorialLab2">
            <h2>Factorial</h2>
            <input type="number" name="numeroFactorizarNAME" placeholder="Número" required>
            <button type="submit">Calcular factorial</button>
        </form>
        <div id="resultadoFactorialLab2"></div>
    </section>

<script src="lab2.js"></script>
</body>
</html>

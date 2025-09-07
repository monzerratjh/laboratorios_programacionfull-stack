<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section class="contenedor-uno">
        
        <form id="formComprobarCedulaLab4">

            <h1>Comprobar cédulas uruguayas </h1>

             <label for="comprobarFORM">Ingrese su cedula para saber si es válida: </label>
            <input type="number" name="comprobarNAME" required>

            <input type="submit" value="Comprobar" class="boton">
        </form>
        <div id="resultadoComprobarLab4"></div>

        <form id="formVerificadorLab4">

            <h1>Generar dígito verificador</h1>

            <label for="verificador">Ingrese los primeros 7 digitos de su C.I:</label>
            <input type="number" name="numeroBase" id="Verificador" required>

            <input type="submit" id="btn-verificador" value="Calcular" class="boton">
        </form>
        <div id="resultadoVerificadorLab4"></div>
    </section>

<script src="lab4.js"></script>
</body>
</html>

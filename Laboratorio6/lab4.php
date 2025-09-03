<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section>
        <h1>Lab 4 - Cédulas Uruguayas</h1>

        <form id="formComprobarCedulaLab4">
            <label>Ingrese su cédula:</label>
            <input type="number" name="comprobarNAME" placeholder="Ej: 12345678" required>
            <button type="submit">Comprobar</button>
        </form>
        <div id="resultadoComprobarLab4"></div>

        <form id="formVerificadorLab4">
            <label>Ingrese los primeros 7 dígitos de su C.I:</label>
            <input type="number" name="numeroBase" placeholder="Ej: 1234567" required>
            <button type="submit">Calcular dígito verificador</button>
        </form>
        <div id="resultadoVerificadorLab4"></div>
    </section>

<script src="lab4.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <section>
        <h1>Lab 5 - Ficha de estudiante</h1>
        <form id="formFichaEstudianteLab5">
            <label>Nombre completo:</label>
            <input type="text" name="comprobarNombreNAME" required>

            <label>Cédula:</label>
            <input type="number" name="comprobarCedulaNAME" required>

            <label>Localidad:</label>
            <input type="text" name="comprobarLocalidadNAME" required>

            <label>Dirección:</label>
            <input type="text" name="comprobarDireccionNAME" required>

            <label>Teléfono:</label>
            <input type="number" name="comprobarTelefonoNAME" required>

            <label>Email:</label>
            <input type="email" name="comprobarEmailNAME" required>

            <h2>Notas asignaturas</h2>
            <input type="number" name="nota1NAME" placeholder="Matemática" required>
            <input type="number" name="nota2NAME" placeholder="Geografía" required>
            <input type="number" name="nota3NAME" placeholder="Literatura" required>
            <input type="number" name="nota4NAME" placeholder="Lengua Española" required>
            <input type="number" name="nota5NAME" placeholder="Cálculo" required>
            <input type="number" name="nota6NAME" placeholder="Sistemas Operativos" required>
            <input type="number" name="nota7NAME" placeholder="Química" required>
            <input type="number" name="nota8NAME" placeholder="Biología" required>
            <input type="number" name="nota9NAME" placeholder="Física" required>
            <input type="number" name="nota10NAME" placeholder="Ciberseguridad" required>

            <button type="submit">Enviar datos</button>
        </form>
        <div id="resultadoNotasLab5"></div>
    </section>

<script src="lab5.js"></script>
</body>
</html>

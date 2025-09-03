<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 5</title>
<style>
        body {
            display: flex;
            justify-content: center;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 350px;
            gap: 10px;
            background-color: #D4D65C;
            border-radius: 1rem;
            padding: 1.5rem;
            
        }
        .boton {
            border-radius: 1rem;
            background-color: #5ca3d6ff;
            border: none;
            padding: 0.5rem;
            color: white;
        }
        #tabla {
            padding: 0.5rem;
            border-radius: 1rem;
            border: none;
        }
        label {
            text-align: center;
            font-size: 1rem;
            padding-bottom: 0.5rem;
        }

        .resultadoFichaEstudiante {
            display: flex;
            flex-direction: column;
            background-color: #D4D65C;
            border-radius: 1rem;
            padding: 1.5rem;
            margin: 1rem;
        }
    </style>

</head>
<body>

    <form id="formFichaEstudiante">
        <h1>Ficha de estudiante</h1>
        <label for=""><strong>Nombre completo:</strong></label>
        <input type="text" name="comprobarNombreNAME"  required>

        <label for=""><strong>Cedula de identidad:</strong></label>
        <input type="number" name="comprobarCedulaNAME" required>

        <label for=""><strong>Localidad:</strong></label>
        <input type="text" name="comprobarLocalidadNAME" required>

        <label for=""><strong>Dirección:</strong></label>
        <input type="text" name="comprobarDireccionNAME" required>

        <label for=""><strong>Telefono:</strong></label>
        <input type="number" name="comprobarTelefonoNAME" required>

        <label for=""><strong>Email:</strong></label>
        <input type="email" name="comprobarEmailNAME" required>

        <h2>Notas asignaturas:</h2>
        <label for=""><strong>Nota matemática:</strong></label>
        <input type="number" name="nota1NAME" required>

        <label for=""><strong>Nota geografía:</strong></label>
        <input type="number" name="nota2NAME" required>

        <label for=""><strong>Nota literatura:</strong></label>
        <input type="number" name="nota3NAME" required>

        <label for=""><strong>Nota lengua española:</strong></label>
        <input type="number" name="nota4NAME" required>

        <label for=""><strong>Nota calculo:</strong></label>
        <input type="number" name="nota5NAME" required>

        <label for=""><strong>Nota sistemas operativos:</strong></label>
        <input type="number" name="nota6NAME" required>

        <label for=""><strong>Nota quimica:</strong></label>
        <input type="number" name="nota7NAME" required>

        <label for=""><strong>Nota biologia:</strong></label>
        <input type="number" name="nota8NAME" required>

        <label for=""><strong>Nota fisica:</strong></label>
        <input type="number" name="nota9NAME" required>

        <label for=""><strong>Nota ciberseguridad:</strong></label>
        <input type="number" name="nota10NAME" required>

        <input type="submit" value="Enviar datos" class="boton">

    </form>

    <div id="resultadoNotas"></div>

    <script>
        document.getElementById("formFichaEstudiante").addEventListener("submit", function(e) {
    e.preventDefault();
    const formFichaEstudiante = new FormData(this);

    fetch("backend-lab5.php", {
        method: "POST",
        body: formFichaEstudiante
    })
    .then(res => res.json())
    .then(dataFicha => {
        document.getElementById("resultadoNotas").innerHTML = `
        <div class="resultadoFichaEstudiante">
        <h2>Datos del Alumno</h2>
        <p><strong>Nombre:</strong> ${dataFicha.alumno.nombre}</p>
        <p><strong>Cédula:</strong> ${dataFicha.alumno.cedula}</p>
        <p><strong>Localidad:</strong> ${dataFicha.alumno.localidad}</p>
        <p><strong>Dirección:</strong> ${dataFicha.alumno.direccion}</p>
        <p><strong>Teléfono:</strong> ${dataFicha.alumno.telefono}</p>
        <p><strong>Email:</strong> ${dataFicha.alumno.email}</p>

        <h2>Resultados</h2>
        <p><strong>Promedio de sus notas:</strong> ${dataFicha.promedio}</p>
        <p><strong>${dataFicha.leyenda}</strong></p>
        </div>`;
    });
});

    </script>
</body>
</html>
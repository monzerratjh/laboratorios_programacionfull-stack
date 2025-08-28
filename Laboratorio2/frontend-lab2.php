<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar PHP</title>
    <style>
        body {
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 200px;
            gap: 10px;
            background-color: #D4D65C;
            border-radius: 1rem;
            padding: 1.5rem;
        }
        #boton {
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
    </style>
</head>
<body>

    <h1>Tablas de Multiplicar</h1>
    <form id="formTabla">
        <label for="tablaFORM"><strong>Ingrese el número de la tabla que quiere ver</strong></label>
        <input type="number" name="tablaNAME" id="tablaID" required>
        <input type="submit" value="Ver tabla" id="boton">
    </form>

    <div id="resultado"></div>

    <h1>Posibilidades de ganar el CINCO de ORO</h1>
    <form id="formCincoOro">
        <label for="vecesApostadas">Ingrese cuántas veces ha apostado:</label>
        <input type="number" name="vecesApostadasNAME" id="inputVecesApostadas" required>
        <input type="submit" id="btn-vecesApostadas">
    </form>

    <div id="resultadoOro"></div>

    <h1>Cálculo de factoriales</h1>
    <form id="formFactorizar">
        <label for="numeroAFactorizar">Ingrese el número que quiere factorizar:</label>
        <input type="number" name="numeroFactorizarNAME" id="numeroAFactorizar" maxlength="2" required>
        <input type="submit" id="btn-factorizar">
    </form>

    <div id="resultadoFactorizar"></div>


    <script>
        //TABLA MULTIPLICAR
        document.getElementById("formTabla").addEventListener("submit", function(e) {
            e.preventDefault(); // Previene el envío normal del formulario

            // Creamos un objeto FormData con los datos del formulario
            const formData = new FormData(this); //new FormData(document.getElementById("formTabla"))

            // Enviamos los datos al servidor usando fetch con método POST
            fetch("backend-lab2.php", {
                method: "POST",
                body: formData  // Le pasamos los datos del formulario
            })
            .then(res => res.json()) // Procesamos la respuesta como JSON
            .then(data => {
                // Mostramos la tabla recibida en el div "resultado"
                document.getElementById("resultado").innerHTML = data;
            });
        });

        //CINCO DE ORO
        document.getElementById("formCincoOro").addEventListener("submit", function(e) {
            e.preventDefault(); // Previene el envío normal del formulario

            // Creamos un objeto FormData con los datos del formulario
            const formDataCincoOro = new FormData(this); //new FormData(document.getElementById("formTabla"))

            // Enviamos los datos al servidor usando fetch con método POST
            fetch("backend-lab2.php", {
                method: "POST",
                body: formDataCincoOro  // Le pasamos los datos del formulario
            })
            .then(respuestaOro => respuestaOro.json()) // Procesamos la respuesta como JSON
            .then(dataOro => {
                // Mostramos la tabla recibida en el div "resultado"
                document.getElementById("resultadoOro").innerHTML = dataOro;
            });
        });

        // FACTORIZAR
         document.getElementById("formFactorizar").addEventListener("submit", function(e) {
            e.preventDefault(); // Previene el envío normal del formulario

            // Creamos un objeto FormData con los datos del formulario
            const formDataFactorizar = new FormData(this); //new FormData(document.getElementById("..."))

            // Enviamos los datos al servidor usando fetch con método POST
            fetch("backend-lab2.php", {
                method: "POST",
                body: formDataFactorizar  // Le pasamos los datos del formulario
            })
            .then(res => res.json()) // Procesamos la respuesta como JSON
            .then(dataFactorizar => {
                // Mostramos la tabla recibida en el div "resultado"
                document.getElementById("resultadoFactorizar").innerHTML = dataFactorizar;
            });
        });
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
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
        <label for="tabla"><strong>Ingrese el número de la tabla que quiere ver</strong></label>
        <input type="text" name="tabla" id="tabla" required>
        <input type="submit" value="Ver tabla" id="boton">
    </form>

    <div id="resultado"></div>

    <script>
        document.getElementById("formTabla").addEventListener("submit", function(e) {
            e.preventDefault(); // Previene el envío normal del formulario

            let formData = new FormData(this);

            fetch("parte1.php", {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {
                document.getElementById("resultado").innerHTML = data;
            });
        });
    </script>

</body>
</html>

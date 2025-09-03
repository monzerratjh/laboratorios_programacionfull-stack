<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    </style>
</head>
<body>

    <h1>Comprobar cedulas uruguayas </h1>
    <form id="formComprobarCedula">
        <label for="comprobarFORM"><strong>Ingrese su cedula para saber si es válida</strong></label>
        <input type="number" name="comprobarNAME" id="comprobarFORM" required>
        <input type="submit" value="Comprobar cedula" class="boton">
    </form>

    <div id="resultadoComprobar"></div>

    <h1>Sistema generado de digitos verificadores</h1>
    <form id="formVerificador">
        <label for="verificador">Ingrese los primeros 7 digitos de su C.I:</label>
        <input type="number" name="numeroBase" id="Verificador" required>
        <input type="submit" id="btn-verificador" value="Calcular Dig.Verificador" class="boton">
    </form>

    <div id="resultadoVerificador"></div>

    <script>
        
//COMPROBAR CEDULAS
document.getElementById("formComprobarCedula").addEventListener("submit", function(e) {
    e.preventDefault();
    const formComprobar = new FormData(this);

    fetch("backend-lab4.php", {
        method: "POST",
        body: formComprobar
    })
    .then(res => res.json())
    .then(dataComprobar => {
        document.getElementById("resultadoComprobar").innerHTML = dataComprobar;
    });
});

//VERIFICADOR
document.getElementById("formVerificador").addEventListener("submit", function(e) {
    e.preventDefault();
    const formDataVerificador = new FormData(this);

    fetch("backend-lab4.php", {
        method: "POST",
        body: formDataVerificador
    })
    .then(res => res.json())
    .then(dataVerificador => {
        document.getElementById("resultadoVerificador").innerHTML = dataVerificador;
    });
});

    </script>

</body>
</html>

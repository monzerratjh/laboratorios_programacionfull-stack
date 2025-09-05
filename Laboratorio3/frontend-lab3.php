<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases Númericas</title>
    <style>
        .contenedorGeneral {
            display: flex;
            align-items: center;
            gap: 40px;
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

        label {
            text-align: center;
            font-size: 1rem;
            padding-bottom: 0.5rem;
        }

        #resultadoConversionBase{
            color: green;
        }
    </style>
</head>
<body>
    

    <h1>Bases Númericas</h1>

    <div class="contenedorGeneral">

    <form id="formBases">
        <label for="">Tipo de Base:</label>
        <select name="tipoBaseNAME" id="tipoBase" required>
            <option value="Decimal">Decimal</option>
            <option value="Octal">Octal</option>
            <option value="Binario">Binario</option>
            <option value="Hexadecimal">Hexadecimal</option>
        </select>

        <label for="">Número</label>
        <input type="number" name="numeroConvertirNAME" id="baseIngresada" required>

        <label for="">Tipo de Base a Convertir:</label>
        <select name="baseConvertirNAME" id="tipoBaseConvertir" required>
            <option value="Decimal">Decimal</option>
            <option value="Octal">Octal</option>
            <option value="Binario">Binario</option>
            <option value="Hexadecimal">Hexadecimal</option>
        </select>
        <input type="submit" id="btn-convertirBase" class="boton">

        <div id="resultadoConversionBase"></div>
    </form>
    

    <form action="" method="post">
        <!--El NAME al final va para indicar que está en el campo de name-->
        <label for="">Número 1</label>
        <input type="number" name="numeroCalcularNAME" id="num1" required>

        <label for="">Número 2</label>
        <input type="number" name="numero2CalcularNAME" id="num2" required>

        <label for="operador">Operación:</label>
        <select name="operador" id="tipoOperador" required>
            <option value="+">Suma (+)</option>
            <option value="-">Resta (-)</option>
            <option value="*">Multiplicación (*)</option>
            <option value="/">División (/)</option>
        </select>
        <input type="submit" id="formBases2"class="boton">
        <div id="resultadoSumaConversionBase"></div> 
    </form>
       
    </div>
    
    <script>
        //CONVERSION DE BASES
        document.getElementById("formBases").addEventListener("submit", function(e) {
            e.preventDefault(); // Previene el envío normal del formulario

            // Creamos un objeto FormData con los datos del formulario
            const formDataConversion = new FormData(this); //new FormData(document.getElementById("..."))

            // Enviamos los datos al servidor usando fetch con método POST
            fetch("backend-lab3.php", {
                method: "POST",
                body: formDataConversion  // Le pasamos los datos del formulario
            })
            .then(res => res.json()) // Procesamos la respuesta como JSON
            .then(dataConversion => {
                // Mostramos la tabla recibida en el div "resultado"
                document.getElementById("resultadoConversionBase").innerHTML = dataConversion;
            });
        });

        // CALCULADORA ENTRE BASES
        document.getElementById("formBases2").addEventListener("submit", function(e) {
            e.preventDefault();

            const formDataCalculo = new FormData();
            formDataCalculo.append("num1", document.getElementById("num1").value);
            formDataCalculo.append("num2", document.getElementById("num2").value);
            formDataCalculo.append("operador", document.getElementById("tipoOperador").value);

            fetch("backend-lab3.php", {
                method: "POST",
                body: formDataCalculo
            })
            .then(res => res.json())
            .then(resultadoCalculo => {
            if (resultadoCalculo.error) {
                document.getElementById("resultadoSumaConversionBase").innerHTML = `
                    <p>${resultadoCalculo.error}</p>
                `;
            } else {
                document.getElementById("resultadoSumaConversionBase").innerHTML = `
                    <h3>Resultado en todas las bases:</h3>
                    <ul>
                        <li>Decimal: ${resultadoCalculo.decimal}</li>
                        <li>Binario: ${resultadoCalculo.binario}</li>
                        <li>Octal: ${resultadoCalculo.octal}</li>
                        <li>Hexadecimal: ${resultadoCalculo.hexadecimal.toUpperCase()}</li>
                    </ul>
                `;
            }
        });
    });
    </script>
</body>
</html>

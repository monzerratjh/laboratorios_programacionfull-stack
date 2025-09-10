<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section id="lab5" class="contenedor-dos">
        <form id="formFichaEstudianteLab5">

            <div class="estudiante_notas">
                <h2>Ficha de estudiante</h2>    

                <label>Nombre completo:</label>
                <input type="text" name="comprobarNombreNAME" required>

                <label>Cédula de identidad:</label>
                <input type="number" name="comprobarCedulaNAME" required>

                <label>Localidad:</label>
                <input type="text" name="comprobarLocalidadNAME" required>

                <label>Dirección:</label>
                <input type="text" name="comprobarDireccionNAME" required>

                <label>Teléfono:</label>
                <input type="number" name="comprobarTelefonoNAME" required>

                <label>Email:</label>
                <input type="email" name="comprobarEmailNAME" required>
            </div>
            
            <div class="estudiante_notas">
                <h2>Notas asignaturas</h2>

                <label for="">Ingrese la cantidad de notas a promediar:</label>

                <select name="canNotasNAME" id="canNotas" required>
                    <option value="5">5 Asignatutas</option>
                    <option value="10">10 Asignatutas</option>
                    <option value="15">15 Asignatutas</option>
                </select>
              <!--  
                <label>Nota matemática:</label>
                <input type="number" name="nota1NAME" max="10" required>

                <label>Nota geografía:</label>
                <input type="number" name="nota2NAME" max="10"   required>

                <label>Nota literatura:</label>
                <input type="number" name="nota3NAME" max="10" required>

                <label>Nota lengua española:</label>
                <input type="number" name="nota4NAME" max="10" required>

                <label>Nota cálculo:</label>
                <input type="number" name="nota5NAME" max="10" required>

                <label>Nota sistemas operativos:</label>
                <input type="number" name="nota6NAME" max="10" required>

                <label>Nota química</label>
                <input type="number" name="nota7NAME" max="10" required>

                <label>Nota biología:</label>
                <input type="number" name="nota8NAME" max="10" required>

                <label>Nota fisica:</label>
                <input type="number" name="nota9NAME" max="10" required>

                <label>Nota ciberseguridad:</label>
                <input type="number" name="nota10NAME" max="10" required>
-->
            </div> 
            
            <input type="submit" value="Enviar datos" class="boton">
        </form>

        <div id="resultadoNotasLab5"></div>

    </section>

<script src="lab5.js"></script>
</body>
</html>

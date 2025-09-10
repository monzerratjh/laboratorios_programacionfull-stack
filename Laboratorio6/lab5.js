// ===== LAB 5 =====

// escuchamos el evento "change" en el <select> con id="canNotas"
document.getElementById("canNotas").addEventListener("change", function(e) {
    e.preventDefault();

    // guardamos la cantidad seleccionada (5, 10 o 15)
    const cantidad = parseInt(this.value); //el elemento de HTML con id *canNotas*

    // obtenemos el contenedor donde van a ir los inputs dinámicos
    const contenedor = document.getElementById("contenedorNotas");
    contenedor.innerHTML = "";

    // creamos un contador para usar en el while
    let i = 1;

    // mientras i sea menor o igual a la cantidad seleccionada
    while (i <= cantidad) {
        // va agregando al contenedor un label y un input numérico
        // name="nota${i}NAME" -> recibe en PHP 
        contenedor.innerHTML += `
            <label>Nota ${i}:</label> 
            <input type="number" name="nota${i}NAME" min="1" max="10" required>
        `; //Nota ${i} => // i -> 1, 2, 3, 4, 5, 6, ...
        // incremo de i para que el bucle avance
        i++;
    }
});


document.getElementById("formFichaEstudianteLab5").addEventListener("submit", function(evento) {
    evento.preventDefault();

    const formDataFichaEstudiante = new FormData(evento.target); // evento.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataFichaEstudiante
    })
    .then(resultadoFichaEstudiante=>resultadoFichaEstudiante.json())
    .then(dataFichaEstudiante=>{
        if (dataFichaEstudiante.error) {
            document.getElementById("resultadoNotasLab5").innerHTML = `
                <div class="error">${dataFichaEstudiante.error}</div>
            `;
            return; // cortar acá si hubo error
        }

        // si no hay error, muestro los datos
        document.getElementById("resultadoNotasLab5").innerHTML = `
            <div class="resultadoFichaEstudiante">
            <h2>Datos del Alumno</h2>
            <p><strong>Nombre:</strong> ${dataFichaEstudiante.alumno.nombre}</p>
            <p><strong>Cédula:</strong> ${dataFichaEstudiante.alumno.cedula}</p>
            <p><strong>Localidad:</strong> ${dataFichaEstudiante.alumno.localidad}</p>
            <p><strong>Dirección:</strong> ${dataFichaEstudiante.alumno.direccion}</p>
            <p><strong>Teléfono:</strong> ${dataFichaEstudiante.alumno.telefono}</p>
            <p><strong>Email:</strong> ${dataFichaEstudiante.alumno.email}</p>

            <h2>Resultados</h2>
            <p><strong>Promedio de sus notas:</strong> ${dataFichaEstudiante.promedio}</p>
            <p><strong>${dataFichaEstudiante.leyenda}</strong></p>
            </div>`;
    })
});

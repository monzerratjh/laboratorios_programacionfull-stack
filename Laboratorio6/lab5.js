// ===== LAB 5 =====
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

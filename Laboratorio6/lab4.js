
// ===== LAB 4 =====
document.getElementById("formComprobarCedulaLab4").addEventListener("submit", function(e) {
    e.preventDefault();
    
    const formDataComprobarCedula = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataComprobarCedula
    })

    .then(resultadoComprobarCedula=>resultadoComprobarCedula.json())
    .then(dataComprobarCedula=> document.getElementById("resultadoComprobarLab4").innerHTML = dataComprobarCedula);
});

document.getElementById("formVerificadorLab4").addEventListener("submit", function(e) {
    e.preventDefault();
    
    const formDataVerificador = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataVerificador
    })

    .then(resultadoVerificador=>resultadoVerificador.json())
    .then(dataVerificador=> document.getElementById("resultadoVerificadorLab4").innerHTML = dataVerificador);
});



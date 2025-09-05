
// ===== LAB 2 =====
document.getElementById("formTablaLab2").addEventListener("submit", function(e) {
    e.preventDefault();

    const formDataTabla = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataTabla
    })

    .then(resTabla=>resTabla.json())
    .then(dataTabla=> document.getElementById("resultadoTablaLab2").innerHTML = dataTabla);
});

document.getElementById("formCincoOroLab2").addEventListener("submit", function(e) {
    e.preventDefault();

    const formDataOro = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataOro
    })

    .then(resultado5Oro=>resultado5Oro.json())
    .then(data5Oro=> document.getElementById("resultadoCincoOroLab2").innerHTML = data5Oro);
});

document.getElementById("formFactorialLab2").addEventListener("submit", function(e) {
    e.preventDefault();

    const formDataFactorial = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataFactorial
    })

    .then(resultadoFactorial=>resultadoFactorial.json())
    .then(dataFactorial=> document.getElementById("resultadoFactorialLab2").innerHTML = dataFactorial);
});

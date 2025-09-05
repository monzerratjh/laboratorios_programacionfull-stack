// ===== LAB 1 =====
document.getElementById("formCalculadoraLab1").addEventListener("submit", e=>{
    e.preventDefault(); // Evita que el formulario se envíe de manera tradicional (recargando la página)

    // Creamos un objeto FormData con los datos del formulario que disparó el evento
    const formData1 = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formData1 // body: formData -> enviamos los datos del formulario en formato "multipart/form-data"
    })

    // Convertimos la respuesta del servidor a formato JSON
    .then(resultadoCalculadora=>resultadoCalculadora.json())

    // Una vez que tenemos los datos JSON, los usamos para actualizar el contenido de la página
    .then(data => 
        // Mostramos el resultado en el elemento con id "resultadoCalculadoraLab1"
        // data.resultado viene desde backend-lab6.php
        document.getElementById("resultadoCalculadoraLab1").innerHTML = data.resultado);
});

document.getElementById("formAreasLab1").addEventListener("submit", e=>{
    e.preventDefault();

    // Creamos un objeto FormData con los datos del formulario que disparó el evento
    const formDataArea = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataArea // enviamos los datos del formulario
    })

    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoCuadradoLab1").innerHTML = data.resultado);
});

document.getElementById("formRectanguloLab1").addEventListener("submit", e=>{
    e.preventDefault();

    // Creamos un objeto FormData con los datos del formulario que disparó el evento
    const formDataAreaR = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataAreaR // enviamos los datos del formulario
    })

    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoRectanguloLab1").innerHTML = data.resultado);
});

document.getElementById("formTrianguloLab1").addEventListener("submit", e=>{
    e.preventDefault();

    // Creamos un objeto FormData con los datos del formulario que disparó el evento
    const formDataAreaT = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataAreaT // enviamos los datos del formulario
    })

    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoTrianguloLab1").innerHTML = data.resultado);
});

document.getElementById("formCircunferenciaLab1").addEventListener("submit", e=>{
    e.preventDefault();

    // Creamos un objeto FormData con los datos del formulario que disparó el evento
    const formDataAreaC = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataAreaC // enviamos los datos del formulario
    })
    
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoCircunferenciaLab1").innerHTML = data.resultado);
});

document.getElementById("formBhaskaraLab1").addEventListener("submit", e=>{
    e.preventDefault();

    // Creamos un objeto FormData con los datos del formulario que disparó el evento
    const formDataBhaskara= new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataBhaskara // enviamos los datos del formulario
    })

    .then(msg=>msg.json())
    .then(data=> document.getElementById("resultadoBhaskaraLab1").innerHTML = data.resultado);
});

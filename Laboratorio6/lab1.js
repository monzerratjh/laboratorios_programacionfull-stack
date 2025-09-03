// ===== LAB 1 =====
document.getElementById("formCalculadoraLab1").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoCalculadoraLab1").innerHTML = data.resultado);
});

document.getElementById("formAreasLab1").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoCuadradoLab1").innerHTML = data.resultado);
});

document.getElementById("formRectanguloLab1").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoRectanguloLab1").innerHTML = data.resultado);
});

document.getElementById("formTrianguloLab1").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoTrianguloLab1").innerHTML = data.resultado);
});

document.getElementById("formCircunferenciaLab1").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoCircunferenciaLab1").innerHTML = data.resultado);
});

document.getElementById("formBhaskaraLab1").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoBhaskaraLab1").innerHTML = data.resultado);
});


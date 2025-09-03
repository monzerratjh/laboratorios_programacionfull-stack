
// ===== LAB 4 =====
document.getElementById("formComprobarCedulaLab4").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoComprobarLab4").innerHTML = data);
});

document.getElementById("formVerificadorLab4").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoVerificadorLab4").innerHTML = data);
});



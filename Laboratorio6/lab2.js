
// ===== LAB 2 =====
document.getElementById("formTablaLab2").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoTablaLab2").innerHTML = data);
});

document.getElementById("formCincoOroLab2").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoCincoOroLab2").innerHTML = data);
});

document.getElementById("formFactorialLab2").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoFactorialLab2").innerHTML = data);
});



// ===== LAB 5 =====
document.getElementById("formFichaEstudianteLab5").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=>{
        document.getElementById("resultadoNotasLab5").innerHTML = `
            Promedio: ${data.promedio.toFixed(2)} <br>
            Estado: ${data.leyenda}
        `;
    });
});

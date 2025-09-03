// ===== LAB 3 =====
document.getElementById("formBasesLab3").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=> document.getElementById("resultadoConversionLab3").innerHTML = data);
});

document.getElementById("formCalcBasesLab3").addEventListener("submit", e=>{
    e.preventDefault();
    fetch("backend-lab6.php",{method:"POST",body:new FormData(e.target)})
    .then(res=>res.json())
    .then(data=>{
        if(data.error) document.getElementById("resultadoCalcBasesLab3").innerHTML = data.error;
        else document.getElementById("resultadoCalcBasesLab3").innerHTML = `
            Decimal: ${data.decimal} <br>
            Binario: ${data.binario} <br>
            Octal: ${data.octal} <br>
            Hexadecimal: ${data.hexadecimal}
        `;
    });
});


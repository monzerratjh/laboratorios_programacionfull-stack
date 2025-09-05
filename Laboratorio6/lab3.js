// ===== LAB 3 =====
document.getElementById("formBasesLab3").addEventListener("submit", function(e) {
    e.preventDefault();

    const formDataBases = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataBases
    })

    .then(resultadoConvertirBases=>resultadoConvertirBases.json())
    .then(dataConvertirBases=> document.getElementById("resultadoConversionLab3").innerHTML = dataConvertirBases);
});

document.getElementById("formCalcBasesLab3").addEventListener("submit", function(e) {
    e.preventDefault();

    const formDataCalculoBases = new FormData(e.target); // e.target hace referencia al formulario mismo

    // Enviamos los datos al servidor usando fetch con método POST
    fetch("backend-lab6.php", {
        method: "POST",
        body: formDataCalculoBases
    })

    .then(resCalculoBases=>resCalculoBases.json())
    .then(dataCalculoBases=>{ // una vez convertido a JSON, lo guardamos en "dataCalculoBases" y lo usamos para mostrar el resultado en el div del HTML

        if (dataCalculoBases.error) {
                document.getElementById("resultadoCalcBasesLab3").innerHTML = `
                    <p>${dataCalculoBases.error}</p>
                `;
            } else {
                document.getElementById("resultadoCalcBasesLab3").innerHTML = `
                    <h3>Resultado en todas las bases:</h3>
                    <ul>
                        <li>Decimal: ${dataCalculoBases.decimal}</li>
                        <li>Binario: ${dataCalculoBases.binario}</li>
                        <li>Octal: ${dataCalculoBases.octal}</li>
                        <li>Hexadecimal: ${dataCalculoBases.hexadecimal.toUpperCase()}</li>
                    </ul>
                `;
            }
        });
});

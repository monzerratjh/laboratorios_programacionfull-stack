<?php

if (isset($_POST['comprobarNombreNAME'])) {
    $nombre = $_POST['comprobarNombreNAME'];
    $cedula = $_POST['comprobarCedulaNAME'];
    $localidad = $_POST['comprobarLocalidadNAME'];
    $telefono = $_POST['comprobarTelefonoNAME'];
    $direccion = $_POST['comprobarDireccionNAME'];
    $email = $_POST['comprobarEmailNAME'];
    $nota1 = $_POST['nota1NAME'];
    $nota2 = $_POST['nota2NAME'];
    $nota3 = $_POST['nota3NAME'];
    $nota4 = $_POST['nota4NAME'];
    $nota5 = $_POST['nota5NAME'];
    $nota6 = $_POST['nota6NAME'];
    $nota7 = $_POST['nota7NAME'];
    $nota8 = $_POST['nota8NAME'];
    $nota9 = $_POST['nota9NAME'];
    $nota10 = $_POST['nota10NAME'];

    $resultadoPromedio = calcularPromedio($nota1, $nota2, $nota3, $nota4, $nota5, $nota6, $nota7, $nota8, $nota9, $nota10);
     $mostrarLeyenda = leyenda($resultadoPromedio);
    header("Content-Type: application/json");
    
echo json_encode([
    "promedio" => $resultadoPromedio,
    "leyenda"  => $mostrarLeyenda
]);
exit;

        
}

function calcularPromedio ($nota1, $nota2, $nota3, $nota4, $nota5, $nota6, $nota7, $nota8, $nota9, $nota10) {
    return ($nota1+$nota2+$nota3+$nota4+$nota5+$nota6+$nota7+$nota8+$nota9+$nota10)/10;
}

function leyenda($resultadoPromedio){
    if($resultadoPromedio>=1 && $resultadoPromedio <= 3) {
        return "Situación Académica: Examen Febrero";
        
    } else if ($resultadoPromedio>=4 && $resultadoPromedio <= 7) {
        return "Situación Académica: Examen reglamentado";
        
    } else if ($resultadoPromedio>=8 && $resultadoPromedio <= 12) {
        return "Situación Académica: Exonerado.";
        
    } else {
        return "Situación Académica: Sin datos";
    }

}
    
    
?>
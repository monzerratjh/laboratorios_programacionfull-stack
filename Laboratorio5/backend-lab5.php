<?php

if (isset($_POST['comprobarNombreNAME'])) {
    $nombre = $_POST['comprobarNombreNAME'];
    $cedula = $_POST['comprobarCedulaNAME'];
    $localidad = $_POST['comprobarLocalidadNAME'];
    $telefono = $_POST['comprobarTelefonoNAME'];
    $direccion = $_POST['comprobarTelefonoNAME'];
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

    header("Content-Type: application/json");
    echo json_encode("Promedio de sus notas: ".$resultadoPromedio);

    
    $mostrarLeyenda = leyenda($resultadoPromedio);
        
    

    echo json_encode("Leyenda: ".$mostrarLeyenda);
    exit;
}

function calcularPromedio ($nota1, $nota2, $nota3, $nota4, $nota5, $nota6, $nota7, $nota8, $nota9, $nota10) {
    $promedio = ($nota1+$nota2+$nota3+$nota4+$nota5+$nota6+$nota7+$nota8+$nota9+$nota10)/10;

    return $promedio;
}

function leyenda($resultadoPromedio){
    if($resultadoPromedio>=1 && $resultadoPromedio <= 3) {
        echo json_encode("Situación Académica: Examen Febrero");
        exit;
    } else if ($resultadoPromedio>=4 && $resultadoPromedio <= 7) {
        echo json_encode("Situación Académica: Examen reglamentado");
        exit;
    } else if ($resultadoPromedio>=8 && $resultadoPromedio <= 12) {
        echo json_encode("Situación Académica: Exonerado.");
        exit;
    }
    return $resultadoPromedio;
}
    
    
?>
<?php

// Este archivo recibe datos desde el cliente (enviados con fetch desde index.php) y devuelve la tabla de multiplicar en formato JSON.

// Primero verificamos si el formulario envió el campo "tabla" mediante POST
if (isset($_POST['tabla'])) {
    
    // Convertimos el valor recibido a número entero para evitar errores
    $numeroTablaMultiplicar = (int)$_POST['tabla']; 
    
    // Variable donde iremos guardando la tabla como texto
    $tabla = "";

    // Bucle para generar la tabla de multiplicar del número recibido
    // Recorremos desde 0 hasta 10 y vamos concatenando el resultado en la variable $tabla
    for ($i = 0; $i <= 10; $i++) {
        $tabla .= $numeroTablaMultiplicar . " x " . $i . " = " . ($numeroTablaMultiplicar * $i) . "<br>";
    }

    // Avisamos al navegador que la respuesta será un JSON
    header("Content-Type: application/json");

    // Convertimos el string con la tabla en formato JSON y lo enviamos al cliente
    echo json_encode($tabla);

    // Cortamos la ejecución del script para asegurarnos de que no se mande nada más
    exit;
}

?>

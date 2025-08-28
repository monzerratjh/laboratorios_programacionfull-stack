<?php

// Este archivo recibe datos desde el cliente (enviados con fetch desde frontend-lab2.php) y devuelve la tabla de multiplicar en formato JSON.

// Primero verificamos si el formulario envió el campo "tablaNAME" mediante POST (SIEMPRE EN HTML name)
if (isset($_POST['tablaNAME'])) {
    
    // Convertimos el valor recibido a número entero para evitar errores
    $numeroTablaMultiplicar = (int)$_POST['tablaNAME']; 
    
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

if (isset($_POST['vecesApostadasNAME'])) {
    $vecesApostadas = (int)$_POST['vecesApostadasNAME'];

    if($vecesApostadas > 0 && $vecesApostadas <= 1712304) {
        
        // veces * formulacombinada / 1
        $probabilidadesOro = $vecesApostadas / formulaCombinaciones();

        header("Content-Type: application/json");
       
        // Convertimos el string con la tabla en formato JSON y lo enviamos al cliente
        echo json_encode("PROBABILIDAD: ".$probabilidadesOro);
        exit;
        
    } else {
        echo json_encode("Error, el número de veces ingresado debe ser menos a 1712304");
        exit;
    }
}


if (isset($_POST['numeroFactorizarNAME'])) {
    
    // Convertimos el valor recibido a número entero para evitar errores
    $numeroFactorizar = (int)$_POST['numeroFactorizarNAME']; 

   
    // Avisamos al navegador que la respuesta será un JSON
    header("Content-Type: application/json");

    // Convertimos el string con la tabla en formato JSON y lo enviamos al cliente
    echo json_encode("Numero factorizado: ". calcularFactorial($numeroFactorizar));

    // Cortamos la ejecución del script para asegurarnos de que no se mande nada más
    exit;
}



// Función para calcular el factorial de un número
function calcularFactorial($numeroAFactorizar) {
    $respuestaFactorizada = 1;
    for ($i = $numeroAFactorizar; $i > 1; $i--) {
        $respuestaFactorizada *= $i;
    }
    return $respuestaFactorizada;
}

// Función para calcular las combinaciones posibles
function formulaCombinaciones() {
    $numeroBolas = 48;
    $numerosElegidos = 5;
    $numerador = calcularFactorial($numeroBolas);
    $denominador = calcularFactorial($numerosElegidos) * calcularFactorial($numeroBolas - $numerosElegidos);
    return $numerador / $denominador;
}

?>

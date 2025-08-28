<?php

if (isset($_POST['comprobarNAME'])) {
    $cedulaComprobar = $_POST['comprobarNAME'];

    if (!is_numeric($cedulaComprobar) || strlen($cedulaComprobar) !== 8) {
        echo json_encode("La cédula debe tener 8 dígitos.");
        exit;
    }

    //substr se usa para extraer una parte de una cadena de texto. 
    //En este caso tomar los primeros 7 caracteres y los guarda en la variable 
    $numeroBase = substr($cedulaComprobar, 0, 7);

    //Toma el último dígito de la cédula (el dígito verificador ingresado por el usuario) y lo convierte a número
    $digitoIngresado = intval(substr($cedulaComprobar, -1));

    //llama la función
    $digitoCorrecto = calcularDigitoVerificadorCedula($numeroBase);

    if ($digitoIngresado === $digitoCorrecto) {
        echo json_encode("La cédula $cedulaComprobar es válida.");
    } else {
        echo json_encode("La cédula $cedulaComprobar es inválida. El dígito correcto es $digitoCorrecto.");
    }
    exit;

}

if (isset($_POST['numeroBase'])) {
    $numeroBase = $_POST['numeroBase'];
    $digito = calcularDigitoVerificadorCedula($numeroBase);

    header("Content-Type: application/json");
    echo json_encode($digito);
    exit;
}

function calcularDigitoVerificadorCedula($numeroBase) {
    $factores = [2, 9, 8, 7, 6, 3, 4];

    // Validar que sea numérico y de 7 dígitos
    if (!is_numeric($numeroBase) || strlen($numeroBase) !== 7) {
        return "Por favor, introduce un número base válido de 7 dígitos.";
    }

    $suma = 0;
    for ($i = 0; $i < strlen($numeroBase); $i++) {
        $suma += intval($numeroBase[$i]) * $factores[$i];
    }

    $modulo = $suma % 10;

    if ($modulo === 0) {
        $digitoVerificador = 0;
    } else {
        $digitoVerificador = 10 - $modulo;
    }

    return $digitoVerificador;
}

?>



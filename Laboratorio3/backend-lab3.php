<?php

// Parte 1
if(isset($_POST['numeroConvertirNAME'])){
    $baseInicial= $_POST['tipoBaseNAME'];
    $numeroConvertir = (int)$_POST['numeroConvertirNAME'];
    $tipoBaseConvertir = $_POST['baseConvertirNAME'];

    // Determinar valor decimal según base de origen
    switch($baseInicial) {
        case "Binario": 
            $Decimal = bindec($numeroConvertir); // -> Convierte binario a decimal
            break;

        case "Octal": 
            $Decimal = octdec($numeroConvertir); // -> Convierte octal a decimal
            break;

        case "Hexadecimal": 
            $Decimal = hexdec($numeroConvertir); // -> Convierte hexadecimal a decimal
            break;

        default: 
            $Decimal = intval($numeroConvertir); // -> Ya es decimal
            break; 
    }

    // Convertir a la base destino
    switch($tipoBaseConvertir) {
        case "Binario": 
            $resultado = decbin($Decimal); // -> Convierte decimal a binario
            break;

        case "Octal": 
            $resultado = decoct($Decimal); // -> Convierte decimal a octal
            break;

        case "Hexadecimal": 
            $resultado = dechex($Decimal); // -> Convierte decimal a hexadecimal
            break;
        default: 
            $resultado = $Decimal; // -> Ya es decimal
            break;
    }

    /*
        INFO
           - $Decimal almacena el valor del número ingresado en base 10 (decimal).

           - Se utiliza como base intermedia: primero se convierte cualquier número (binario, octal, hexadecimal o decimal) a decimal, y luego desde decimal se convierte a la base final seleccionada.

           - $resultado almacena el valor final convertido a la base deseada.
    */

    header("Content-Type: application/json");
    echo json_encode("Resultado de la Conversión de Bases: ".$resultado);
    exit;
}
/*
     -  base_convert(string $num, int $from_base, int $to_base): string

     -  $dato = 50;
        $conver_bin = base_convert($dato, 10, 2);
        echo $conver_bin;

     -  function conver_dec_bin($num){
            $conver_bin= base_convert($num, 10, 2);
            return $conver_bin;
        }

        $resultado_conver = conver_dec_bin($num);
        echo $resultado_conver

function convertir_base($baseInicial, $numeroConvertir, $tipoBaseConvertir){
    $convertir= base_convert($numeroConvertir, $baseInicial, $tipoBaseConvertir);
    return $convertir;
}
    
    */

// Parte 2
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operador'])) {
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $operador = $_POST['operador'];

    switch ($operador) {
        case "+": 
            $resultado = $num1 + $num2; 
            break;

        case "-": 
            $resultado = $num1 - $num2; 
            break;

        case "*": 
            $resultado = $num1 * $num2; 
            break;

        case "/": 
            if ($num2 == 0) {
                echo json_encode([
                    "error" => "Error: División por cero"
                ]);
                exit;
            } else {
                $resultado = $num1 / $num2;
            }
            break;
            
        default: 
            echo json_encode("Error: Operador no válido");}

    echo json_encode([
        "decimal" => $resultado,
        "binario" => decbin($resultado),
        "octal" => decoct($resultado),
        "hexadecimal" => strtoupper(dechex($resultado))
    ]);
    exit;
}
?>

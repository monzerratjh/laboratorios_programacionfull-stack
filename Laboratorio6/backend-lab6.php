<?php
header("Content-Type: application/json");

// ===== LAB 1 =====
if(isset($_POST['num1Calculadora'])){
    $num1 = (float)$_POST['num1Calculadora'];
    $num2 = (float)$_POST['num2Calculadora'];
    $operadorLab1 = $_POST['operadorCalculadora'];

    switch($operadorLab1){
        case '+': $resultadoCalculadora = $num1 + $num2; break;
        case '-': $resultadoCalculadora = $num1 - $num2; break;
        case '*': $resultadoCalculadora = $num1 * $num2; break;
        case '/': $resultadoCalculadora = $num2 != 0 ? $num1 / $num2 : "Error: División por cero"; break;
        default:  $resultadoCalculadora = "Operador no válido"; break;
    }
    echo json_encode(["resultado"=>$resultadoCalculadora]);
    exit;
}

if(isset($_POST['ladoCuadrado'])){
    $lado = (float)$_POST['ladoCuadrado'];

    $areaCuadrado = $lado * $lado;
    echo json_encode(["resultado"=>"Área cuadrado: ".($areaCuadrado)]);
    exit;
}

if(isset($_POST['ladoRectangulo'])){
    $lado = (float)$_POST['ladoRectangulo'];
    $ancho = (float)$_POST['anchoRectangulo'];

    $areaRectangulo = $lado * $ancho;

    echo json_encode(["resultado"=>"Área rectángulo: ".($areaRectangulo)]);
    exit;
}

if(isset($_POST['baseTriangulo'])){
    $base = (float)$_POST['baseTriangulo'];
    $altura = (float)$_POST['alturaTriangulo'];

    $areaTriangulo = ($base * $altura) / 2;

    echo json_encode(["resultado"=>"Área triángulo: ".($areaTriangulo)]);
    exit;
}

if(isset($_POST['radioCircunferencia'])){
    $radio = (float)$_POST['radioCircunferencia'];

    $areaCircunferencia = M_PI * pow($radio, 2);

    echo json_encode(["resultado"=>"Área circunferencia: ".($areaCircunferencia)]);
    exit;
}

if(isset($_POST['a'])){
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $c = (float)$_POST['c'];

    $resultadoBhaskara = baskara($a, $b, $c);

    if ($resultadoBhaskara === null) {
        $msg = "No existen soluciones reales.";
    } else {
        $msg = "x1 = {$resultadoBhaskara[0]}, x2 = {$resultadoBhaskara[1]}";
    }
    
    echo json_encode(["resultado"=>$msg]);
    exit;
}

function raizPositiva($discriminante): bool {
    return $discriminante >= 0;
}

function baskara($a, $b, $c) {
    $discriminante = ($b * $b) - (4 * $a * $c);

    if (!raizPositiva($discriminante)) {
        return null;
    }

    $raiz = sqrt($discriminante);
    $x1 = (-$b + $raiz) / (2 * $a);
    $x2 = (-$b - $raiz) / (2 * $a);

    return [$x1, $x2];
}


// ===== LAB 2 =====
if(isset($_POST['tablaNAME'])){
    // Convertimos el valor recibido a número entero para evitar errores
    $numeroTablaMultiplicar = (int)$_POST['tablaNAME']; 
    
    // Variable donde iremos guardando la tabla como texto
    $tabla = "";

    // Bucle para generar la tabla de multiplicar del número recibido
    // Recorremos desde 0 hasta 10 y vamos concatenando el resultado en la variable $tabla
    for ($i = 0; $i <= 10; $i++) {
        $tabla .= $numeroTablaMultiplicar . " x " . $i . " = " . ($numeroTablaMultiplicar * $i) . "<br>";
    }

    echo json_encode($tabla);
    exit;
}

if (isset($_POST['vecesApostadasNAME'])) {
    $vecesApostadas = (int)$_POST['vecesApostadasNAME'];

    if ($vecesApostadas < 0) {
        echo json_encode("Error, el número de veces ingresado debe ser positivo.");

    } elseif ($vecesApostadas >= 1712304) {
        echo json_encode("Error, el número de veces ingresado debe ser menor a 1712304"); 

    } else {
        // veces * formulacombinada / 1
        $probabilidadesOro = $vecesApostadas / formulaCombinaciones();

        echo json_encode("Probabilidad: ". number_format($probabilidadesOro, 10));
        // number_format($probabilidadesOro, 10)  formatea el número $probabilidadesOro con 10 decimales. Esto evita que PHP lo muestre en notación científica (exponencial)
    }
    exit;
}

if(isset($_POST['numeroFactorizarNAME'])){
    $numeroFactorizar = (int)$_POST['numeroFactorizarNAME'];

    echo json_encode(" ".calcularFactorial($numeroFactorizar));

    exit;
}

// Función para calcular el factorial de un número
function calcularFactorial($numeroAFactorizar) {
    
    // Verificamos si el número es negativo
    if ($numeroAFactorizar < 0) {
        return "Error: el factorial no está definido para números negativos";
        
    } else {

        $respuestaFactorizada = 1;
        for ($i = $numeroAFactorizar; $i > 1; $i--) {
            $respuestaFactorizada *= $i;
        }
        return $respuestaFactorizada;
    }
}

// Función para calcular las combinaciones posibles
function formulaCombinaciones() {
    $numeroBolas = 48;
    $numerosElegidos = 5;
    $numerador = calcularFactorial($numeroBolas);
    $denominador = calcularFactorial($numerosElegidos) * calcularFactorial($numeroBolas - $numerosElegidos);
    return $numerador / $denominador;
}


// ===== LAB 3 =====
if(isset($_POST['numeroConvertirNAME'])){
    $numero = $_POST['numeroConvertirNAME'];
    $baseIni = $_POST['tipoBaseNAME'];
    $baseFin = $_POST['baseConvertirNAME'];

    switch($baseIni){
        case "Binario": $dec = bindec($numero); break;
        case "Octal": $dec = octdec($numero); break;
        case "Hexadecimal": $dec = hexdec($numero); break;
        default: $dec = intval($numero); break;
    }

    switch($baseFin){
        case "Binario": $res=decbin($dec); break;
        case "Octal": $res=decoct($dec); break;
        case "Hexadecimal": $res=strtoupper(dechex($dec)); break;
        default: $res=$dec; break;
    }
    echo json_encode("Resultado: $res");
    exit;
}

if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operador'])){
    $n1 = (int)$_POST['num1'];
    $n2 = (int)$_POST['num2'];
    $operadorLab1 = $_POST['operador'];
    $error="";
    switch($operadorLab1){
        case "+": $res=$n1+$n2; break;
        case "-": $res=$n1-$n2; break;
        case "*": $res=$n1*$n2; break;
        case "/": $res=$n2!=0?$n1/$n2:$error="Error: división por 0"; break;
        default: $error="Operador inválido"; break;
    }
    if($error){
        echo json_encode(["error"=>$error]);
    } else {
        echo json_encode([
            "decimal"=>$res,
            "binario"=>decbin($res),
            "octal"=>decoct($res),
            "hexadecimal"=>strtoupper(dechex($res))
        ]);
    }
    exit;
}

// ===== LAB 4 =====
if(isset($_POST['comprobarNAME'])){
    $cedula = $_POST['comprobarNAME'];
    if(!is_numeric($cedula) || strlen($cedula)!=8){
        echo json_encode("Cédula inválida");
        exit;
    }
    $base = substr($cedula,0,7);
    $digito = calcularDigitoVerificador($base);
    if(intval(substr($cedula,-1))==$digito){
        echo json_encode("Cédula válida");
    } else {
        echo json_encode("Cédula inválida, dígito correcto: $digito");
    }
    exit;
}

if(isset($_POST['numeroBase'])){
    $base = $_POST['numeroBase'];
    $digito = calcularDigitoVerificador($base);
    echo json_encode("Dígito verificador: $digito");
    exit;
}

function calcularDigitoVerificador($num){
    $fact = [2,9,8,7,6,3,4];
    $suma=0;
    for($i=0;$i<7;$i++){
        $suma += intval($num[$i])*$fact[$i];
    }
    $mod = $suma%10;
    return $mod===0?0:10-$mod;
}

// ===== LAB 5 =====
if(isset($_POST['comprobarNombreNAME'])){
    $notas=[];
    for($i=1;$i<=10;$i++){
        $notas[] = floatval($_POST["nota{$i}NAME"]);
    }
    $promedio = array_sum($notas)/count($notas);
    if($promedio>=7) $leyenda="Aprobado";
    elseif($promedio>=4) $leyenda="Regular";
    else $leyenda="Reprobado";
    echo json_encode(["promedio"=>$promedio,"leyenda"=>$leyenda]);
    exit;
}
?>

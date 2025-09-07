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
    $baseInicial= $_POST['tipoBaseNAME'];
    $numeroConvertir = (int)$_POST['numeroConvertirNAME'];
    $tipoBaseConvertir = $_POST['baseConvertirNAME'];

    // Determinar valor decimal según base de origen (elegido por el usuario mediante el *select*)
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

    echo json_encode("Resultado de la Conversión de Bases: ".$resultado);
    exit;
}

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


// ===== LAB 4 =====
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
        echo json_encode("La cédula $cedulaComprobar es inválida."); // "El dígito correcto es $digitoCorrecto."
    }
    exit;
}

if (isset($_POST['numeroBase'])) {
    $numeroBase = $_POST['numeroBase'];
    $digito = calcularDigitoVerificadorCedula($numeroBase);

    if ($digito === null) {
        // si la función devolvió null se muestra UNICAMNETE el error (sin "El último dígito es:")
        echo json_encode("Por favor, introduce un número base válido de 7 dígitos.");
    } else {
        // mostrra resultado
        echo json_encode("El último dígito es: ".$digito);
    }
    exit;
}

function calcularDigitoVerificadorCedula($numeroBase) {
    $factores = [2, 9, 8, 7, 6, 3, 4];

    // Validar que sea numérico y de 7 dígitos
    if (!is_numeric($numeroBase) || strlen($numeroBase) !== 7) {
        return null; // asi no se mostrara " El ultimo digito es: Por favor, introduce un número base válido de 7 dígitos." sino que UNICAMNETE el error (aclarado en el *IF* mas arriba)
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

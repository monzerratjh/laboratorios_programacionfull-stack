<?php
header("Content-Type: application/json");

// ===== LAB 1 =====
if(isset($_POST['num1Calculadora'])){
    $n1 = (float)$_POST['num1Calculadora'];
    $n2 = (float)$_POST['num2Calculadora'];
    $operadorLab1 = $_POST['operadorCalculadora'];
    switch($operadorLab1){
        case "+": $res=$n1+$n2; break;
        case "-": $res=$n1-$n2; break;
        case "*": $res=$n1*$n2; break;
        case "/": $res=$n2!=0?$n1/$n2:"Error: división por 0"; break;
        default: $res="Operador inválido"; break;
    }
    echo json_encode(["resultado"=>$res]);
    exit;
}

if(isset($_POST['ladoCuadrado'])){
    $lado = (float)$_POST['ladoCuadrado'];
    echo json_encode(["resultado"=>"Área cuadrado: ".($lado*$lado)]);
    exit;
}

if(isset($_POST['ladoRectangulo'])){
    $l = (float)$_POST['ladoRectangulo'];
    $a = (float)$_POST['anchoRectangulo'];
    echo json_encode(["resultado"=>"Área rectángulo: ".($l*$a)]);
    exit;
}

if(isset($_POST['baseTriangulo'])){
    $b = (float)$_POST['baseTriangulo'];
    $h = (float)$_POST['alturaTriangulo'];
    echo json_encode(["resultado"=>"Área triángulo: ".($b*$h/2)]);
    exit;
}

if(isset($_POST['radioCircunferencia'])){
    $r = (float)$_POST['radioCircunferencia'];
    echo json_encode(["resultado"=>"Área circunferencia: ".(pi()*$r*$r)]);
    exit;
}

if(isset($_POST['a'])){
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $c = (float)$_POST['c'];
    $d = $b*$b - 4*$a*$c;
    if($d<0){
        $res = "No tiene soluciones reales";
    } else {
        $x1 = (-$b + sqrt($d))/(2*$a);
        $x2 = (-$b - sqrt($d))/(2*$a);
        $res = "x1=$x1 , x2=$x2";
    }
    echo json_encode(["resultado"=>$res]);
    exit;
}

// ===== LAB 2 =====
if(isset($_POST['tablaNAME'])){
    $num = (int)$_POST['tablaNAME'];
    $tabla = "";
    for($i=0;$i<=10;$i++){
        $tabla .= "$num x $i = ".($num*$i)."<br>";
    }
    echo json_encode($tabla);
    exit;
}

if(isset($_POST['vecesApostadasNAME'])){
    $veces = (int)$_POST['vecesApostadasNAME'];
    $total = factorial(48)/(factorial(5)*factorial(48-5));
    if($veces>0 && $veces<=$total){
        $prob = $veces / $total;
        echo json_encode("Probabilidad: $prob");
    } else {
        echo json_encode("Error: número inválido");
    }
    exit;
}

if(isset($_POST['numeroFactorizarNAME'])){
    $num = (int)$_POST['numeroFactorizarNAME'];
    echo json_encode("Factorial de $num: ".factorial($num));
    exit;
}

function factorial($n){
    $res=1;
    for($i=2;$i<=$n;$i++) $res*=$i;
    return $res;
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

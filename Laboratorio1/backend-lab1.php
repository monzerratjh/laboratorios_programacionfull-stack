<?php
if (isset($_POST['calcular-calculadora'])) {
    $num1 = (float)$_POST['num1Calculadora'];
    $num2 = (float)$_POST['num2Calculadora'];
    $operadorCalculadora = $_POST['operadorCalculadora'];

    switch ($operadorCalculadora) {
        case '+': $resultadoCalculadora = $num1 + $num2; break;
        case '-': $resultadoCalculadora = $num1 - $num2; break;
        case '*': $resultadoCalculadora = $num1 * $num2; break;
        case '/': $resultadoCalculadora = $num2 != 0 ? $num1 / $num2 : "Error: División por cero"; break;
        default:  $resultadoCalculadora = "Operador no válido"; break;
    }

    header("Location: frontend-lab1.php?resultadoCalculadora=$resultadoCalculadora");
    exit;
}

if (isset($_POST['areaCuadrado'])) {
    $ladoCuadrado = (float)$_POST['ladoCuadrado'];
    $areaCuadrado = $ladoCuadrado * $ladoCuadrado;

    header("Location: frontend-lab1.php?resultadoCuadrado=$areaCuadrado");
    exit;
}

if (isset($_POST['areaRectangulo'])) {
    $ladoRectangulo = (float)$_POST['ladoRectangulo'];
    $anchoRectangulo = (float)$_POST['anchoRectangulo'];
    $areaRectangulo = $ladoRectangulo * $anchoRectangulo;

    header("Location: frontend-lab1.php?resultadoRectangulo=$areaRectangulo");
    exit;
}

if (isset($_POST['areaTriangulo'])) {
    $baseTriangulo = (float)$_POST['baseTriangulo'];
    $alturaTriangulo = (float)$_POST['alturaTriangulo'];
    $areaTriangulo = ($baseTriangulo * $alturaTriangulo) / 2;

    header("Location: frontend-lab1.php?resultadoTriangulo=$areaTriangulo");
    exit;
}

if (isset($_POST['areaCircunferencia'])) {
    $radioCircunferencia = (float)$_POST['radioCircunferencia'];
    $areaCircunferencia = M_PI * pow($radioCircunferencia, 2);

    header("Location: frontend-lab1.php?resultadoCircunferencia=$areaCircunferencia");
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

if (isset($_POST['calcular-bhaskara'])) {
    $a = (float) $_POST['a'];
    $b = (float) $_POST['b'];
    $c = (float) $_POST['c'];

    $resultadoBhaskara = baskara($a, $b, $c);

    if ($resultadoBhaskara === null) {
        $msg = "No existen soluciones reales.";
    } else {
        $msg = "x1 = {$resultadoBhaskara[0]}, x2 = {$resultadoBhaskara[1]}";
    }

    header("Location: frontend-lab1.php?resultadoBhaskara=" . urlencode($msg));
    exit;
}
?>

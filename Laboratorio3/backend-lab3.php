<?php

if(isset($_POST['numeroConvertirNAME'])){
    $numeroConvertir= (int)$_POST['numeroConvertirNAME'];
    $baseConvertir= (int)$_POST['baseConvertirNAME'];

    header("Content-Type: application/json");

    $conver_bin= base_convert($numeroConvertir, 10, 2);

    echo json_encode($conver_bin);
    exit;
}

function conver_dec_bin($num){
    $conver_bin= base_convert($num, 10, 2);
    return $conver_bin;
}



//base_convert(string $num, int $from_base, int $to_base): string

/*
$dato = 50;

$conver_bin = base_convert($dato, 10, 2);
echo $conver_bin;


function conver_dec_bin($num){
    $conver_bin= base_convert($num, 10, 2);
    return $conver_bin;
}

$resultado_conver = conver_dec_bin($num);
echo $resultado_conver
*/

?>

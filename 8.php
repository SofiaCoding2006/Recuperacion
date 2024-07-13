<?php
$cantidad=intval(readline("ingresa la cantidad a invertir"));
$tasa=intval(readline("ingresa el interes"));

$interes=$cantidad*$tasa/100;
if($interes<7000){
    $total=$cantidad+$interes;
    echo"su nueva cantidad con reinversion es de:".$total;
}
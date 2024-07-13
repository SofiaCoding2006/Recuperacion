<?php

$Metros=intval(readline("ingrese la cantidad en metros"));
$Unidad=intval(readline("ingrese la unidad que desea convertir"));

if($unidad=1){
    $resultado=$metros*100;
    echo"el resultado en centimetros es de:".$resultado;
}elseif($unidad=2){
    $resultado=$metros/100;
    echo"el resultado en kilometros es de:".$resultado;
}elseif($unidad=3){
    $resultado=$metros*39.3701;
    echo"el resultado en pulgadas es de:".$resultado;
}
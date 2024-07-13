<?php

$edad=intval(readline("ingrese su edad"));
$sexo=readline("ingresa tu sexo");

if($sexo=$femenino){
    $pulsaciones=220-$edad/10;
    echo"su numero de pulsaciones es de:".$pulsaciones;
}elseif($sexo=$masculino){
    $pulsaciones=210-$edad/10;
    echo"su numero de pulsaciones es de:".$pulsaciones;
}
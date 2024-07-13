<?php

$sueldo=intval(readline("ingrese su sueldo"));
$antiguedad=intval(readline("ingrese su antiguedad"));

if ($sueldo<500 and $antiguedad>=10){
    $aumento=$sueldo*0.20;
    $total=$aumento+$sueldo;
    echo"el sueldo total con 20% es de:".$suelo;
}elseif($sueldo<500 and $antiguedad<=10){
    $aumento=$sueldo*0.05;
    $total=$aumento+$sueldo;
    echo"el sueldo total con 5% es de:".$suelo;
}elseif($sueldo>=500){
    echo"el sueldo total con 5% es de".$sueldo;
}